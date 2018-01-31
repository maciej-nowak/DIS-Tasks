using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Security;
using System.Web.SessionState;

namespace Sesja
{
    public class Global : System.Web.HttpApplication
    {

        protected void Application_Start(object sender, EventArgs e)
        {
            string pomocniczy = global::System.IO.File.ReadAllText(HttpContext.Current.Server.MapPath("Counter.txt"));
            int licznik = Convert.ToInt32(pomocniczy);
            Application["AktywneSesje"] = 0;
            Application["WszystkieSesje"] = licznik;
        }

        protected void Session_Start(object sender, EventArgs e)
        {
            Session.Timeout = 1;
            Application["AktywneSesje"] = (int)Application["AktywneSesje"] + 1;
            Application["WszystkieSesje"] = (int)Application["WszystkieSesje"] + 1;
            Session["WyswietleniaWSesji"] = 0;
            global::System.IO.File.WriteAllText(HttpContext.Current.Server.MapPath("Counter.txt"), Application["WszystkieSesje"].ToString());
        }

        protected void Application_BeginRequest(object sender, EventArgs e)
        {

        }

        protected void Application_AuthenticateRequest(object sender, EventArgs e)
        {

        }

        protected void Application_Error(object sender, EventArgs e)
        {

        }

        protected void Session_End(object sender, EventArgs e)
        {
            Application["AktywneSesje"] = (int)Application["AktywneSesje"] - 1;
            Session["WyswietleniaWSesji"] = 0;
            Session.Clear();
        }

        protected void Application_End(object sender, EventArgs e)
        {

        }
    }
}