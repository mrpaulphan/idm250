# See: https://hub.docker.com/_/wordpress/

# ARG PHP_VERSION=7.4
# ARG WP_VERSION=5.6.1

#*** If you need a specific WP or PHP Version, follow this convention:
#     NOTE: WP Version is required if doing PHP Version
# FROM wordpress:${WP_VERSION}-php${PHP_VERSION}
FROM wordpress
