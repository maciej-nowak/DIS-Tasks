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
    public partial class Vote : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            if(Session["Login"] != null)
            {
                Label5.Text = "Witaj " + Session["Login"];
                string path = "C:\\Users\\Maciej\\Documents\\Visual Studio 2013\\Projects\\Authorization2\\Authorization\\App_Data\\" + Session["Login"] + ".txt";

                string[] lines = System.IO.File.ReadAllLines(@path);
                if (lines[2] == "1")
                {
                    Label4.Text = "Oddałeś już głos. Nie możesz głosować";
                    Label6.Visible = false;
                    Label7.Visible = false;
                    Label8.Visible = false;
                    Button1.Visible = false;
                    Button2.Visible = false;
                    Button3.Visible = false;
                }
                    
                string path2 = "C:\\Users\\Maciej\\Documents\\Visual Studio 2013\\Projects\\Authorization2\\Authorization\\App_Data\\VOTE.txt";
                string[] lines2 = System.IO.File.ReadAllLines(@path2);
                Label1.Text = lines2[0];
                Label2.Text = lines2[1];
                Label3.Text = lines2[2];
            }

            else
            {
                Response.Redirect("Login.aspx");
            }

        }

        protected void Button4_Click(object sender, EventArgs e)
        {
            Session["Login"] = null;
            Response.Redirect("Index.aspx");
        }

        protected void Button1_Click(object sender, EventArgs e)
        {
            string path = "C:\\Users\\Maciej\\Documents\\Visual Studio 2013\\Projects\\Authorization2\\Authorization\\App_Data\\VOTE.txt";
            string[] lines = System.IO.File.ReadAllLines(@path);
            int tmp = Convert.ToInt32(lines[0]);
            tmp++;
            string[] lines2 = { tmp.ToString(), lines[1], lines[2] };
            System.IO.File.WriteAllLines(@path, lines2);

            string path2 = "C:\\Users\\Maciej\\Documents\\Visual Studio 2013\\Projects\\Authorization2\\Authorization\\App_Data\\" + Session["Login"] + ".txt";
            string[] lines3 = System.IO.File.ReadAllLines(@path2);
            string[] lines4 = { lines3[0], lines3[1], "1" };
            System.IO.File.WriteAllLines(@path2, lines4);
            Response.Redirect("Vote.aspx");
        }

        protected void Button2_Click(object sender, EventArgs e)
        {
            string path = "C:\\Users\\Maciej\\Documents\\Visual Studio 2013\\Projects\\Authorization2\\Authorization\\App_Data\\VOTE.txt";
            string[] lines = System.IO.File.ReadAllLines(@path);
            int tmp = Convert.ToInt32(lines[1]);
            tmp++;
            string[] lines2 = { lines[0], tmp.ToString(), lines[2] };
            System.IO.File.WriteAllLines(@path, lines2);

            string path2 = "C:\\Users\\Maciej\\Documents\\Visual Studio 2013\\Projects\\Authorization2\\Authorization\\App_Data\\" + Session["Login"] + ".txt";
            string[] lines3 = System.IO.File.ReadAllLines(@path2);
            string[] lines4 = { lines3[0], lines3[1], "1" };
            System.IO.File.WriteAllLines(@path2, lines4);
            Response.Redirect("Vote.aspx");
        }

        protected void Button3_Click(object sender, EventArgs e)
        {
            string path = "C:\\Users\\Maciej\\Documents\\Visual Studio 2013\\Projects\\Authorization2\\Authorization\\App_Data\\VOTE.txt";
            string[] lines = System.IO.File.ReadAllLines(@path);
            int tmp = Convert.ToInt32(lines[2]);
            tmp++;
            string[] lines2 = { lines[0], lines[1], tmp.ToString() };
            System.IO.File.WriteAllLines(@path, lines2);

            string path2 = "C:\\Users\\Maciej\\Documents\\Visual Studio 2013\\Projects\\Authorization2\\Authorization\\App_Data\\" + Session["Login"] + ".txt";
            string[] lines3 = System.IO.File.ReadAllLines(@path2);
            string[] lines4 = { lines3[0], lines3[1], "1" };
            System.IO.File.WriteAllLines(@path2, lines4);
            Response.Redirect("Vote.aspx");
        }
    }
}