<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Login.aspx.cs" Inherits="ASPPAges_ListaProduktow" MasterPageFile="~/layout/_Layout.master" %>

<asp:Content ContentPlaceHolderID="contentID" runat="server">
    <article id="content">
        <form runat="server">
            <asp:Label ID="ileUserow" runat="server" Text="Label"></asp:Label>
            <asp:Login ID="Login" runat="server" OnAuthenticate="Login_Authenticate"></asp:Login>
            <asp:LoginStatus ID="Pass" runat="server" />
        </form>
    </article>
</asp:Content>
