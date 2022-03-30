
all:
	make html
	make upload
  
html:
	cd src/ && sage /usr/bin/php2html . ../docs/ -o

upload:
	git add .
	git commit
	git push

runlocal:
	cd src/ && php -S localhost:8000

