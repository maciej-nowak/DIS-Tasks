<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Finish.aspx.cs" Inherits="Sesja.Finish" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1" runat="server">
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
    <div>
    
        <asp:Label ID="InfoLabel" runat="server" Text="Zakończyłeś sesję. Aby powrócić do strony głównej i rozpoczać nową sesje kliknij w STRONA GŁÓWNA"></asp:Label>
    
    </div>
        <p>
            <asp:Button ID="MainPageButton" runat="server" PostBackUrl="~/Main.aspx" Text="STRONA GŁÓWNA" />
        </p>
    </form>
</body>
</html>
