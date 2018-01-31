using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.IO;

namespace Sesja
{
    public partial class Main : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            if (Session["Imie"] != null)
            {
                this.NameTextBox.Text = Session["Imie"].ToString();
            }

            if (Session["Nazwisko"] != null)
            {
                this.SurnameTextBox.Text = Session["Nazwisko"].ToString();
            }
        }

        protected void NextButton_Click(object sender, EventArgs e)
        {
            Session["Imie"] = this.NameTextBox.Text;
            Session["Nazwisko"] = this.SurnameTextBox.Text;
            this.Response.Redirect("Info.aspx");
        }
    }
}