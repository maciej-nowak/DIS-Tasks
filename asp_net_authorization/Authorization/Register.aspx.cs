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
    public partial class Register : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            if(IsPostBack)
            {
                string path = "C:\\Users\\Maciej\\Documents\\Visual Studio 2013\\Projects\\Authorization2\\Authorization\\App_Data\\";
                path = path + TextBox1.Text + ".txt";
                if (File.Exists(@path))
                {
                    Response.Write("Wpisany login jest juz zajety. Podaj inny login");
                }
                else
                {
                    string[] lines = { TextBox1.Text, TextBox2.Text, "0" };
                    System.IO.File.WriteAllLines(@path, lines);
                    Response.Redirect("Login.aspx");

                }
            }
        }

        protected void Button1_Click(object sender, EventArgs e)
        {
        }
    }
}