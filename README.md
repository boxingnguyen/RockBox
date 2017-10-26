# PlayingTime
Raspberrypi &amp; Machine Learning

This is creative project of my company. We learn how to use rasbperry pi model 3 and what's machine learning. 
I try to made a self-driving car named RockBox but in version 1.0 it controllered by web app through raspberry pi 3 and just live stream video. Classification of traffic signs ( stop, turn left, turn right) in folder classify.

This livestream part:
  ```
  sudo apt-get update 
  sudo apt-get dist-upgrade 
  git clone https://github.com/silvanmelchior/RPi_Cam_Web_Interface.git 
  cd RPi_Cam_Web_Interface 
  ./install.sh
  ```
and then html folder will be created in /var/www, you need modify this folder by add controller.php reset.php to html/ note that add code of index.php to html/index.php and main.js to html/js

My references:
```
[1] My circuit on Cacoo: https://cacoo.com/diagrams/swoeZfFjciADU9K5 
[2] Stream with nodejs: https://github.com/arvindr21/pi_livestreaming, http://thejackalofjavascript.com/rpi-live-streaming/ 
[3] Stream with php: https://elinux.org/RPi-Cam-Web-Interface 
[4] Use for make datasets: https://chrome.google.com/webstore/detail/fatkun-batch-download-ima/nnjjahlikiabnchcpehcpkdeckfgnohf?hl=en 
[5] Tutorial of classify: https://codelabs.developers.google.com/codelabs/tensorflow-for-poets/?utm_campaign=chrome_series_machinelearning_063016&utm_source=gdev&utm_medium=yt-desc#3 
```
