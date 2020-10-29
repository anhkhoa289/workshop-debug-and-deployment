build:
	docker build -f ./production.dockerfile -t workshop .

run:
	docker run -it -p 3636:80 workshop

tag:
	docker tag workshop kenvin289/workshop:2.0.0

push:
	docker push kenvin289/workshop:2.0.0
