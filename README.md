# Initial gcloud

gcloud auth list
gcloud auth login

gcloud config list
gcloud config set project zeta-handler-292809


# Start Cluster

gcloud container clusters create k8s-demo --num-nodes 1
kubectl get nodes

kubectl create deployment app --image=kenvin289/workshop:1.0.0
kubectl get pods
kubectl get deployments

kubectl expose deployment app --name=web-app --type=LoadBalancer --port=80 --target-port=80
kubectl get svc web-app

# Update deployment

kubectl get pods
kubectl get pod app-5776cb65f4-qpcbp -o yaml
kubectl set image deployment/app workshop=kenvin289/workshop:2.0.0 --record

# Clean everything

kubectl delete service web-app
gcloud container clusters delete k8s-demo
