<?php
move_uploaded_file($_FILES["video"]["tmp_name"], './upload.video.mp4');
move_uploaded_file($_FILES["image"]["tmp_name"], './upload.image.png');

if (file_exists('./output.mp4')) {
  unlink('./output.mp4');
}

system('ffmpeg -i upload.video.mp4 -i upload.image.png -filter_complex "[1:v]format=argb,geq=r=\'r(X,Y)\':a=\'1*alpha(X,Y)\'[zork];    [0:v][zork]overlay" -vcodec libx264 output.mp4');

echo "Video guardado!";
