<%@ Page Language="C#" AutoEventWireup="true" CodeFile="ListaProduktow.aspx.cs" Inherits="ASPPAges_ListaProduktow" MasterPageFile="~/layout/_Layout.master" %>

<asp:Content ContentPlaceHolderID="contentID" runat="server">
    <article id="content">
        <form runat="server">
            <asp:RadioButtonList ID="RadioButtonList1" runat="server" OnSelectedIndexChanged="RadioButtonList1_SelectedIndexChanged">

            </asp:RadioButtonList>
            <asp:Button ID="Dodaj" runat="server" Text="Dodaj!" OnClick="Dodaj_Click" />
            <asp:Button ID="Podsumowanie" runat="server" Text="Podsumowanie!" OnClick="Podsumowanie_Click" />
            <asp:Label ID="Suma" runat="server" Text="Suma: "></asp:Label>
        </form>
    </article>
</asp:Content>
