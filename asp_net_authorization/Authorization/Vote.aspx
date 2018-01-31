<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Vote.aspx.cs" Inherits="Authorization.Vote" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
    <div>
    
        <asp:Label ID="Label5" runat="server"></asp:Label>
        <asp:Button ID="Button4" runat="server" OnClick="Button4_Click" style="margin-left: 57px" Text="WYLOGUJ" />
        <br />
        <br />
        WYNIKI:</div>
        <p>
            Kowalski:&nbsp;&nbsp; <asp:Label ID="Label1" runat="server" Text="Label"></asp:Label>
            <br />
            Nowak:&nbsp;&nbsp;
            <asp:Label ID="Label2" runat="server" Text="Label"></asp:Label>
            <br />
            Lewandowski:&nbsp;&nbsp;
            <asp:Label ID="Label3" runat="server" Text="Label"></asp:Label>
        </p>
        <p>
            <asp:Label ID="Label4" runat="server" Text="Nie oddałeś jeszcze głosu. ZAGŁOSUJ!!!"></asp:Label>
        </p>
        <p>
            <asp:Label ID="Label6" runat="server" Text="Kowalski"></asp:Label>
            <asp:Button ID="Button1" runat="server" OnClick="Button1_Click" style="margin-left: 58px" Text="WYBIERAM" />
        </p>
        <p>
            <asp:Label ID="Label7" runat="server" Text="Nowak"></asp:Label>
            <asp:Button ID="Button2" runat="server" OnClick="Button2_Click" style="margin-left: 68px" Text="WYBIERAM" />
        </p>
        <p>
            <asp:Label ID="Label8" runat="server" Text="Lewandowski"></asp:Label>
            <asp:Button ID="Button3" runat="server" OnClick="Button3_Click" style="margin-left: 31px" Text="WYBIERAM" />
        </p>
    </form>
</body>
</html>
