<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Info.aspx.cs" Inherits="Sesja.Info" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1" runat="server">
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
    <div>
    
        <asp:Label ID="InfoLabel" runat="server" Text="Nazywasz się:"></asp:Label>
    
    </div>
        <br />
        <asp:Label ID="StatisticLabel" runat="server" Font-Bold="True" Text="Statystyki strony:"></asp:Label>
        <br />
        <br />
        <asp:Label ID="AllUsersLabel" runat="server" Text="Ilość wizyt:"></asp:Label>
        <br />
        <asp:Label ID="ActiveUsersLabel" runat="server" Text="Ilość aktywnych użytkowników:"></asp:Label>
        <br />
        <asp:Label ID="SessionCounterLabel" runat="server" Text="Ilość wyświetleń strony INFO w bieżącej sesji:"></asp:Label>
        <p>
            &nbsp;</p>
        <asp:Button ID="BackButton" runat="server" Text="WSTECZ" PostBackUrl="~/Main.aspx" />
        <asp:Button ID="FinishSessionButton" runat="server" OnClick="FinishSessionButton_Click" style="margin-left: 38px" Text="ZAKOŃCZ SESJE" />
        <asp:Button ID="RefreshButton" runat="server" style="margin-left: 42px" Text="ODŚWIEŻ STRONĘ" PostBackUrl="~/Info.aspx" />
    </form>
</body>
</html>
