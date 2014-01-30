<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Podsumowanie.aspx.cs" Inherits="ASPPAges_ListaProduktow" MasterPageFile="~/layout/_Layout.master" %>

<asp:Content ContentPlaceHolderID="contentID" runat="server">
    <article id="content">
        <form runat="server">
            <asp:Label ID="podsumowanie" runat="server" Text="Label"></asp:Label>
            <asp:Button ID="okBtn" runat="server" Text="ok" OnClick="okBtn_Click" />
        </form>
    </article>
</asp:Content>
