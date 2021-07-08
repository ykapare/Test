FROM ubuntu:16.04

RUN apt-get update && apt-get install -yq --no-install-recommends \
        git \
        ca-certificates \
        php7.0 \
		php-mbstring \
		php7.0-curl \
		php-codesniffer

# entrypoint 
COPY entrypoint.sh /entrypoint.sh


ENTRYPOINT ["/entrypoint.sh"]

