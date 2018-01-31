<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Index.aspx.cs" Inherits="Authorization.Index" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
    <style type="text/css">
        #Password1 {
            margin-left: 21px;
        }
    </style>
</head>
<body>
    <form id="form1" runat="server">
    <div style="font-size: x-large; font-style: inherit; color: #0000FF">
    
        Projektowanie Internetowych Systemów Informacyjnych - Mechanizm Logowania i Uwierzytelniania</div>
        <p style="font-weight: bold">
            Autor: Maciej Nowak</p>
        <p>
            Witaj na stronie głównej projektu. Aby poznać działanie aplikacji, zaloguj się. Jeśli nie posiadasz konta, zarejestruj się lub użyj przykładowych danych logowania<br />
            login: admin<br />
            hasło: admin</p>
        <p>
            &nbsp;</p>
        <asp:HyperLink ID="HyperLink1" runat="server" NavigateUrl="~/Login.aspx">Zaloguj się</asp:HyperLink>
        <p>
            <asp:HyperLink ID="HyperLink2" runat="server" NavigateUrl="~/Register.aspx">Zarejestruj się</asp:HyperLink>
        </p>
    </form>
</body>
</html>
