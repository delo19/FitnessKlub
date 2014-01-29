<%@ Page Language="C#" CodeFile="Contact.aspx.cs"  Inherits="Contact" MasterPageFile="~/layout/_Layout.master" %>

<asp:Content ContentPlaceHolderID="contentID" runat="server">
    <article id="content">
       


        <form runat="server">
            Imie:
            <asp:TextBox ID="name" runat="server" />
            <br>
            Nazwisko:
            <asp:TextBox ID="scdname" runat="server" />
            <br>
            Wiek:
            <asp:TextBox ID="age" runat="server" />
            <br>
            Email:
            <asp:TextBox runat="server" ID="email"></asp:TextBox>
            <br>
            Wiadomość:
            <asp:TextBox id="tresc" TextMode="multiline" Columns="50" Rows="5" runat="server" />

            <asp:Button runat="server" Text="Submit" />
            <br>
            <br>
            <asp:Label ID="outputLabel" runat="server" Visible="False"></asp:Label>

            <asp:RequiredFieldValidator
                ControlToValidate="name"
                Text="Imie jest wymagane"
                runat="server" />
            <br>
            <asp:RequiredFieldValidator
                ControlToValidate="age"
                Text="Wiek jest wymagany"
                runat="server" />
            <br>
            <asp:RequiredFieldValidator
                ControlToValidate="email"
                Text="Email jest wymagany"
                runat="server" />
            <br>
            <asp:CompareValidator
                ID="compval"
                Display="dynamic"
                ControlToValidate="name"
                ValueToCompare="admin"
                Operator="NotEqual"
                ForeColor="red"
                BackColor="yellow"
                Type="String"
                EnableClientScript="false"
                Text="Imie nie moze byc admin!!"
                runat="server" />
            <br>
            <asp:RangeValidator
                ControlToValidate="age"
                MinimumValue="12"
                MaximumValue="100"
                Type="Integer"
                EnableClientScript="false"
                Text="Wiek musi byc od 12 do 100!"
                runat="server" />
            <br>
            <asp:RegularExpressionValidator
                ControlToValidate="email"
                ValidationExpression="\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*"
                EnableClientScript="false"
                ErrorMessage="Email ma nieprawidlowy format!"
                runat="server" />
            <br>
        </form>
    </article>





</asp:Content>
