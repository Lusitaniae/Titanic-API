FROM nginx:1.10

ADD resources/docker/vhost.conf /etc/nginx/conf.d/default.conf
