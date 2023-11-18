# Usually to select particular version instead of latest
FROM node:12.9.0 as base
RUN mkdir -p /srv/app
COPY . /srv/app
WORKDIR /srv/app
# Install production dependencies
RUN npm install --production
# Expose port for access outside of container
ENV PORT 3000
EXPOSE $PORT
CMD ["node", "server.js"]