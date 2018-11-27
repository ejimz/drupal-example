ARG CLI_IMAGE
FROM ${CLI_IMAGE} as cli

FROM amazeeio/php:7.2-fpm

COPY --from=cli /app /app

RUN apk add openldap-dev && docker-php-ext-install ldap
