#!C:/Python27/python
import cgi, os 
import matlab.engine
path1="matlab_engine_imported";
if os.path.isfile(path1):
	os.remove("matlab_engine_imported");
flag_engine_imported = open("matlab_engine_imported","w+");

import cgitb; cgitb.enable()
from os import environ
form = cgi.FieldStorage() 
f = open("name.txt","r")
string = f.read()
f.close()
f11 = form.getvalue('f1')
 
#$var_value = $_GET['varname'];
p1=str(f11);
eng = matlab.engine.start_matlab()
path1="matlab_engine_started";
if os.path.isfile(path1):
	os.remove("matlab_engine_started");
flag_engine_started = open("matlab_engine_started","w+");
def clean(t):
	s=""
	l=list(t)
	for i in range(len(t)):
		if l[i]=='\n':
			s=s+ ' '
		elif l[i]==' ':
			if l[i-1]==' ':
				s=s+''
			else:
				s=s+' '
		else:
			s=s+l[i]
	return s
	


t=eng.imp(str(string),nargout=1)
#print clean(t)
text_file = open("Text.txt", "w")
#text_file.write(clean(t))
text_file.write(clean( t.encode('ascii', 'ignore')))
text_file.close()
extracted="text_extracted";
if os.path.isfile(extracted):
	os.remove("text_extracted");


flag_text_extracted = open("text_extracted","w+"); #flag for the processing page


print "Content-type: text/html"
print 
print "<html>"
print "<head>"
print "<meta http-equiv=\"refresh\" content=\"0; url=http://localhost/ABUOCR/Files/confirm.php\" />"
print "<title>Image Processing</title>"
print "</head>"
print "<body>" 
print "<script type=\"text/javascript\"> window.close()</script>";

print "</body>"
print "</html>"