
namespace WebApplication1
{
    public partial class Treino : System.Web.UI.Page
    {
        int nCor, nPosicao;
        Random oNumero = new Random();
        String[] vNomes = {"Vermelho", "Verde", "Amarelo", "Azul"};
        System.Drawing.Color[] vCores = {System.Drawing.Color.Red, System.Drawing.Color.
green, System.Drawing.Color.Blue, System.Drawing.Color.Yellow}

        protected void Page_Load(object sender, EventArgs e)
        {

        }

        protected void cmdVermelho_Click(object sender, EventArgs e)
        {

        }
        private void fnSorteio() {
            nCor = oNumero.Next (0,1);
            nPosicao = oNumero.Next(0,3);

                if (nCor == 0 ) {
                    txtCor.ForeColor = vCores[nPosicao];
                    txtCor.Text = vNomes [oNumero.Next(0,3)];

                } else {
                    txtCor.ForeColor = vNomes [oNumero.Next(0,3)];
                    txtCor.Text = vCores [nPosicao];
                }
        }
    }
}