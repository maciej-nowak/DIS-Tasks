using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data.SqlClient;
using System.Configuration;
using System.IO;

namespace Authorization
{
    public partial class Login : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {

        }

        protected void Button1_Click(object sender, EventArgs e)
        {
           
                string path = "C:\\Users\\Maciej\\Documents\\Visual Studio 2013\\Projects\\Authorization2\\Authorization\\App_Data\\";
                path = path + TextBox1.Text + ".txt";
                if (File.Exists(@path))
                {
                    string[] lines = System.IO.File.ReadAllLines(@path);
                    if(lines[1]==TextBox2.Text)
                    {
                        Session["Login"] = TextBox1.Text;
                        Response.Redirect("Vote.aspx");
                    }
                    else
                    {
                        Label3.Visible = true;
                        Label3.Text = "Podaj poprawne haslo";
                    }
                }
                else
                {
                    Label3.Visible = true;
                    Label3.Text = "Podaj poprawny login";
                }
        }
    }
}