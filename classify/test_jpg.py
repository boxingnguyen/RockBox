import glob 
import os 
import re 
import logging 
import traceback    
filelist=glob.glob("image_test/*.jpg")
for file_obj in filelist:
  try:
	
		jpg_str=os.popen("file \""+str(file_obj)+"\"").read()
		if (re.search('PNG image data', jpg_str, re.IGNORECASE)) or (re.search('Png patch', jpg_str, re.IGNORECASE)):
			print("The image: " + str(file_obj) + " contains png encoding, please select another jpg image! ") 
			# delete image 
			os.system("sudo rm \""+str(file_obj)+"\"")
  except Exception as e:
	logging.error(traceback.format_exc())
# print("Cleaning jps done")
