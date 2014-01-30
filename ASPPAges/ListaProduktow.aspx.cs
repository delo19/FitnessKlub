using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class ASPPAges_ListaProduktow : System.Web.UI.Page
{
    String aktualny;
    protected void Page_Load(object sender, EventArgs e)
    {
        if (Page.IsPostBack == false) {
            using (var dc = new pswEntities())
            {
                var user = (from us in dc.odzywki select us).ToList();
                List<ListItem> users = new List<ListItem>();
                foreach (var su in user)
                {
                    users.Add(new ListItem(su.Nazwa, su.Id.ToString()));
                }
                RadioButtonList1.DataTextField = "Text";
                RadioButtonList1.DataValueField = "Value";
                RadioButtonList1.DataSource = users;
                RadioButtonList1.DataBind();
                RadioButtonList1.SelectedIndex = 0;
            }
        }
    }
    protected void Dodaj_Click(object sender, EventArgs e)
    {
        using (var dc = new pswEntities())
        {
            long value = long.Parse(aktualny);
            var user =
                (from us in dc.odzywki where us.Id == value select us).ToList();
            double cena = Session["Do zaplaty"] != null ? double.Parse(Session["Do zaplaty"].ToString()) : 0;
            cena += (double)user.First().Cena;
            Session["Do zaplaty"] = cena;
            Suma.Text = "Suma: " + cena;
        }
    }
    protected void Podsumowanie_Click(object sender, EventArgs e)
    {
        Response.Redirect("Podsumowanie.aspx");
    }
    protected void RadioButtonList1_SelectedIndexChanged(object sender, EventArgs e)
    {
        aktualny = RadioButtonList1.SelectedValue;
    }
}