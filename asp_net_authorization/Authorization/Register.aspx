<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Register.aspx.cs" Inherits="Authorization.Register" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
    <style type="text/css">
        #Password1 {
            margin-left: 22px;
        }
    </style>
</head>
<body>
    <form id="form1" runat="server">
    <div>
    
        Aby się zarejestrować, wpisz dane poniżej i potwierdź je przyciskiem ZAREJESTRUJ.</div>
        <p>
            <asp:Label ID="Label1" runat="server" Text="Login:"></asp:Label>
            <asp:TextBox ID="TextBox1" runat="server" style="margin-left: 22px"></asp:TextBox>
            <asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server" ControlToValidate="TextBox1" ErrorMessage="Wprowadź login" ForeColor="Red"></asp:RequiredFieldValidator>
        </p>
        <p>
            <asp:Label ID="Label2" runat="server" Text="Hasło:"></asp:Label>
            <asp:TextBox ID="TextBox2" runat="server" style="margin-left: 21px"></asp:TextBox>
            <asp:RequiredFieldValidator ID="RequiredFieldValidator2" runat="server" ControlToValidate="TextBox2" ErrorMessage="Wprowadź hasło" ForeColor="Red"></asp:RequiredFieldValidator>
        </p>
        <p>
            <asp:Button ID="Button1" runat="server" OnClick="Button1_Click" Text="ZAREJESTRUJ" />
        </p>
    </form>
</body>
</html>
