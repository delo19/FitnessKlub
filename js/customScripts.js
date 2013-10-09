function SendEmail()
{
    var outlookApp = new ActiveXObject("Outlook.Application");
    var nameSpace = outlookApp.getNameSpace("MAPI");
    mailFolder = nameSpace.getDefaultFolder(6);
    mailItem = mailFolder.Items.add('IPM.Note.FormA');
    mailItem.Subject = "Me";
    mailItem.To = "mateusz.sulima0@gmail.com";
    mailItem.HTMLBody = "<table border=1> <tr><td>blabla</td></tr> </table>";
    mailItem.display(0);
}