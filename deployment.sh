#!/bin/bash
sed -e 's/NAME/'$1'/g' ./base/deploy.yaml > ./base/deploy.txt && mv ./base/deploy.txt ./base/deploy.yaml
sed -e 's/NAME/'$1'/g'  -e 's/SECRET/'$2'/g' -e 's/ENVIRONMENT/'$3'/g' -e 's/DATABASE_USER/'$4'/g' -e 's/DATABASE_NAME/'$5'/g' ./overlay/deploy.yaml > ./overlay/deploy.txt && mv ./overlay/deploy.txt ./overlay/deploy.yaml
sed -e 's/NAME/'$1'/g'  -e 's/ENVIRONMENT/'$3'/g' ./overlay/kustomization.yaml > ./overlay/kustomization.txt && mv ./overlay/kustomization.txt ./overlay/kustomization.yaml

sed -e 's/NAME/'$1'/g'  -e 's/ENVIRONMENT/'$3'/g' ./cloudbuild.yaml > ./cloudbuild.txt && mv ./cloudbuild.txt ./cloudbuild.yaml
sed -e 's/NAME/'$1'/g'  -e 's/ENVIRONMENT/'$3'/g' ./skaffold.yaml > ./skaffold.txt && mv ./skaffold.txt ./skaffold.yaml
