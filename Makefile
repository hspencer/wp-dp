
.PHONY: css

install:
	bower install
	
css:
	lessc less/dp-assembler.less dp.css --clean-css="--s1 --advanced --compatibility=ie8"


dist:
	cp bower_components/bootstrap/dist/js/bootstrap.min.js js
	cp bower_components/jquery/dist/jquery.min.js js
	cp -R bower_components/pixograms/fonts/ fonts
	cp -R bower_components/pixograms/less/ less/pixograms