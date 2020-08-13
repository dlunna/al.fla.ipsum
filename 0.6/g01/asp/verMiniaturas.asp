<%
' intentamos evitar la caché del navegador --------------
Response.Expires=0
Response.CacheControl="private"
' ----------------------------------------------------------------
Response.ContentType="text/XML"
'Creamos el objeto FileSystemObject
Set fso = Server.CreateObject("Scripting.FileSystemObject")
' elegimos la carpeta files desde la raiz del servidor web
' sustituir "/files/" por la que os interese
Set folder = fso.GetFolder(Server.MapPath(("/minis/")))
Set files = folder.Files '
' construimos el XML ----------------------------------------
Response.Write("<?xml version='1.0' ?><exploracion carpeta='"+folder.Name+"'>")
For Each file in files
fil=file.Name
Response.write("<archivo nombre='")
Response.write(file.Name)
Response.write("' size='")
Response.write(file.size\1024)
Response.Write("' />")
Next
Response.Write("</exploracion>")
' ----------------------------------------------------------------
Set files = nothing
Set folder = nothing
Set fso = nothing
%>