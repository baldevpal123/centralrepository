FROM nginx:stable-alpine

## Remove default nginx index page
RUN rm -rf /usr/share/nginx/html/*

COPY . /usr/share/nginx/html/project1.html

EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]
hello merge
