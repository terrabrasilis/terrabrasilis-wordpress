# TerraBrasilis Wordpress - Migration to SSL

To be able to publish TerraBrasilis Home Page (Wordpress) it is necessary to configure some variable on the nginx server and to change the relative database on MySQL database. 

## 1) Add to Nginx request header the following lines (If is behind a proxy, add on the main SSL Proxy):

Nginx - proxy_set_header X-Forwarded-Proto $schema;

## 2) Change the following content o Wordpress MySQL database:

update wp_options set option_value = 'https://domain.com/' where option_name = 'siteurl';
update wp_options set option_value = 'https://domain.com/' where option_name = 'home';

SET SQL_SAFE_UPDATES = 0;
update wp_postmeta 
set meta_value = REPLACE(meta_value , 'http://terrabrasilis.dpi.inpe.br/', 'https://domain.com/') 
where meta_value like '%http://terrabrasilis%'

update wp_posts 
set post_content = REPLACE(post_content , 'http://terrabrasilis.dpi.inpe.br', 'https://domain.com/') 
where post_content like '%http://terrabrasilis.dpi.inpe.br%'

### Change this only if the wordpress is behind a path, not on domain root (/) 

update wp_posts 
set post_content = REPLACE(post_content , '"/wp-content/uploads', '"/folder/wp-content/uploads') 
where post_content like '%"/wp-content/uploads%'
