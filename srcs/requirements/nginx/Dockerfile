FROM debian:11

RUN apt update && apt upgrade -y && apt install -y nginx openssl && openssl req -x509 -nodes -out /etc/nginx/file.crt -keyout /etc/nginx/file.key -subj "/C=Ma/L=khouribga/CN=badr/UID=sbadr"

COPY ./conf/nginx.conf /etc/nginx/nginx.conf
COPY ./conf/s.html /

EXPOSE 80
EXPOSE 443

CMD ["nginx", "-g", "daemon off;"]