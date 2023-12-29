FROM tomcat:9-jre11
RUN set -x && apt-get update && apt-get install -y ca-certificates openssl fonts-dejavu && mkdir -p /usr/local/cyclos && mkdir -p /var/log/cyclos && apt-get clean && rm -rf /var/lib/apt/lists/*
# RUN apt-get update -y && apt-get install -y tini && apt-get clean
# RUN apt-get update && apt-get -y install net-tools wget && wget https://dl.google.com/cloudsql/cloud_sql_proxy.linux.amd64 -O /usr/local/bin/cloud_sql_proxy && chmod +x /usr/local/bin/cloud_sql_proxy
# COPY ./cloud-run-entrypoint.sh /
# RUN chmod +x /cloud-run-entrypoint.sh
COPY cyclos-4.16/web/ /usr/local/cyclos/
COPY cyclos-4.16/web/WEB-INF/classes/cyclos-docker.properties /usr/local/cyclos/WEB-INF/classes/cyclos.properties
WORKDIR /usr/local/cyclos
RUN rm -rf /usr/local/tomcat/webapps/*
RUN ln -s /usr/local/cyclos /usr/local/tomcat/webapps/ROOT
VOLUME /var/log/cyclos
# ENTRYPOINT  ["/usr/bin/tini", "--", "/cloud-run-entrypoint.sh"]
CMD ["catalina.sh", "run"]
