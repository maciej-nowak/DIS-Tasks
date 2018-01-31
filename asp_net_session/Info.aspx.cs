using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.IO;

namespace Sesja
{
public partial class Info : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        Session["WyswietleniaWSesji"] = (int)Session["WyswietleniaWSesji"] + 1;
        this.InfoLabel.Text = "Nazywasz się: " + Session["Imie"] + " " + Session["Nazwisko"];
        this.AllUsersLabel.Text = "Ilość wizyt: " + Application["WszystkieSesje"];
        this.ActiveUsersLabel.Text = "Ilość aktywnych użytkowników: " + Application["AktywneSesje"];
        this.SessionCounterLabel.Text = "Ilość wyświetleń strony INFORMACYJNEJ w bieżącej sesji: " + Session["WyswietleniaWSesji"];
    }
    protected void FinishSessionButton_Click(object sender, EventArgs e)
    {
        Session.Abandon();
        this.Response.Redirect("Finish.aspx");
    }

}
}