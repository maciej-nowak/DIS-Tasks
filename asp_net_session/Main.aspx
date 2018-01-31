<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Main.aspx.cs" Inherits="Sesja.Main" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
        <asp:Label ID="TitleLabel" runat="server" BorderColor="#3333FF" BorderStyle="Inset" BorderWidth="0px" Font-Bold="True" Font-Size="20pt" ForeColor="#0000CC" Text="Projektowanie Internetowych Systemów Informacyjnych - Mechanizm Sesji"></asp:Label>
    <div>
    
    </div>
        <p>
    
        <asp:Label ID="AutorLabel" runat="server" Font-Bold="True" Font-Size="15pt" Text="Autor: Maciej Nowak"></asp:Label>
    
        </p>
        <p>
            <asp:Label ID="InfoLabel" runat="server" Text="Witaj na stronie głównej projektu. Aby poznać działanie aplikacji, wpisz swoje imię i nazwisko oraz wciśnij przycisk DALEJ. Zostaniesz przeniesiony do okna w którym ujrzysz liczniki aplikacji oraz sprawdzisz działanie zmiennych sesyjnych."></asp:Label>
        &nbsp;Czas sesji: 60sek</p>
        <p>
            <asp:Label ID="NameLabel" runat="server" Text="Imię:"></asp:Label>
        <asp:TextBox ID="NameTextBox" runat="server" style="margin-left: 47px" Width="121px"></asp:TextBox>
        </p>
        <p>
            <asp:Label ID="SurnameLabel" runat="server" Text="Nazwisko:"></asp:Label>
        <asp:TextBox ID="SurnameTextBox" runat="server" style="margin-left: 12px"></asp:TextBox>
        </p>
        <p>
            <asp:Button ID="NextButton" runat="server" OnClick="NextButton_Click" Text="DALEJ" />
        </p>
        <p>
            &nbsp;</p>
        <p>
            &nbsp;</p>
        <p>
            &nbsp;</p>
    </form>
</body>
</html>
