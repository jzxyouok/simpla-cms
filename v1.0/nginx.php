server {  
        listen  80;    
        server_name sub.domain.com;    
        set $root_path '/srv/www/default';    
        root $root_path;    
        
        index index.php index.html index.htm;    
        
        try_files $uri $uri/ @rewrite;    
        
        location @rewrite {    
            rewrite ^/(.*)$ /index.php?_url=/$1;    
        }    
        
        location ~ \.php {    
        
            fastcgi_pass 127.0.0.1:9000;    
            fastcgi_index /index.php;    
        
            fastcgi_split_path_info       ^(.+\.php)(/.+)$;    
            fastcgi_param PATH_INFO       $fastcgi_path_info;    
            fastcgi_param PATH_TRANSLATED $document_root$fastcgi_path_info;    
            fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;    
            include                       fastcgi_params;  
        }    
        
        location ~* ^/(css|img|js|flv|swf|download)/(.+)$ {    
            root $root_path;    
        }    
        
        location ~ /\.ht {    
            deny all;    
        }    
    } 