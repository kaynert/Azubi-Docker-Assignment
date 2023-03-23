# Use an existing image as the base
FROM nginx:latest

# Copy the index.html file to the nginx html directory
COPY index.html /usr/share/nginx/html/

# Expose port 80
EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]