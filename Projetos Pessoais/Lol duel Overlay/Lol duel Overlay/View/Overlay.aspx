
<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Overlay.aspx.cs" Inherits="Lol_duel_Overlay.WebForm1" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
    <link href="css/visual.css" rel="stylesheet" />
</head>
<body>
    <form id="form1" runat="server">
        <div>
            
            <!--#############################################################################
                #                          Overlay gerada                                   #
                #############################################################################-->
            <div id="overlay">
                <!--Overlay-->
                <asp:Image ID="bsup" runat="server" ImageUrl="~/img/superior/blue/test.png" />
                <asp:Image ID="binf" runat="server" ImageUrl="~/img/inferior/blue/test.png" />
                <asp:Image ID="rsup" runat="server" ImageUrl="~/img/superior/red/test.png" />
                <asp:Image ID="rinf" runat="server" ImageUrl="~/img/inferior/red/test.png" />
                <asp:Image ID="vs" runat="server" ImageUrl="~/img/vs.png" />

                <!--info blue player-->
                <div id="BPname">Raffozo</div>
                <div id="Bcont">@_raffozo</div>

                 <!--info red player-->
                <div id="RPname">Raffozo</div>               
                <div id="Rcont">@_raffozo</div>

                <!--bans blue-->
                <asp:Image ID="BBanimg1" class="bban" runat="server" ImageUrl="~/img/ban/Amumu.png" />              
                <asp:Image ID="BBanimg2" class="bban" runat="server" ImageUrl="~/img/ban/Anivia.png" />
                <asp:Image ID="BBanimg3" class="bban" runat="server" ImageUrl="~/img/ban/Akali.png" />

                <!--bans red-->
                <asp:Image ID="RBanimg1" class="rban" runat="server" ImageUrl="~/img/ban/Aatrox.png"/>
                <asp:Image ID="RBanimg2" class="rban" runat="server" ImageUrl="~/img/ban/Ahri.png" />            
                <asp:Image ID="RBanimg3" class="rban" runat="server" ImageUrl="~/img/ban/yasuo.png" />
            </div>

            <!--#############################################################################
                #                          Area de Configuração                             #
                #############################################################################-->
            <!--Configuração do Lado Azul-->
            <div id="BConfig">
                <!--Titulo para identificação na div-->
                <asp:Label ID="Label1" runat="server" Text="Lado Azul:"></asp:Label><br />

                <!--SEleção de Jogador/Participante-->
                <asp:Label ID="Label2" runat="server" Text="Jogador:"></asp:Label>
                <asp:DropDownList ID="BPlayer" runat="server">
                    <asp:ListItem Value="1">Docil</asp:ListItem>
                    <asp:ListItem Value="2">Tawna</asp:ListItem>
                    <asp:ListItem Value="3">Zuzu</asp:ListItem>
                    <asp:ListItem Value="4">Luluzinha</asp:ListItem>
                    <asp:ListItem Value="5">Raffozo</asp:ListItem>
                    <asp:ListItem Value="6">Ualbs</asp:ListItem>
                    <asp:ListItem Value="7">Hero</asp:ListItem>
                    <asp:ListItem Value="8">Mortha</asp:ListItem>
                    <asp:ListItem Value="9">StarryPeach</asp:ListItem>
                    <asp:ListItem Value="10">Bela</asp:ListItem>
                </asp:DropDownList><br />

                <!--Seleção do Campeão q será usado-->
                <asp:Label ID="Label3" runat="server" Text="Campeão:"></asp:Label>
                <asp:DropDownList ID="BChamp" runat="server">
                    <asp:ListItem Value="0">Aatrox</asp:ListItem>
                    <asp:ListItem Value="1">Ahri</asp:ListItem>
                    <asp:ListItem Value="2">Akali</asp:ListItem>
                    <asp:ListItem Value="3">Alistar</asp:ListItem>
                    <asp:ListItem Value="4">Amumu</asp:ListItem>
                    <asp:ListItem Value="5">Anivia</asp:ListItem>
                </asp:DropDownList><br />

                <!--Seleção de Ban-->
                <asp:Label ID="Label4" runat="server" Text="Ban1:"></asp:Label>
                <asp:DropDownList ID="BBan1" runat="server">
                    <asp:ListItem Value="0">Aatrox</asp:ListItem>
                    <asp:ListItem Value="1">Ahri</asp:ListItem>
                    <asp:ListItem Value="2">Akali</asp:ListItem>
                    <asp:ListItem Value="3">Alistar</asp:ListItem>
                    <asp:ListItem Value="4">Amumu</asp:ListItem>
                    <asp:ListItem Value="5">Anivia</asp:ListItem>
                </asp:DropDownList><br />

                <!--Seleção de Ban-->
                <asp:Label ID="Label5" runat="server" Text="Ban2:"></asp:Label>
                <asp:DropDownList ID="BBan2" runat="server">
                    <asp:ListItem Value="0">Aatrox</asp:ListItem>
                    <asp:ListItem Value="1">Ahri</asp:ListItem>
                    <asp:ListItem Value="2">Akali</asp:ListItem>
                    <asp:ListItem Value="3">Alistar</asp:ListItem>
                    <asp:ListItem Value="4">Amumu</asp:ListItem>
                    <asp:ListItem Value="5">Anivia</asp:ListItem>
                </asp:DropDownList><br />

                <!--Seleção de Ban-->
                <asp:Label ID="Label6" runat="server" Text="Ban3:"></asp:Label>
                <asp:DropDownList ID="BBan3" runat="server">
                    <asp:ListItem Value="0">Aatrox</asp:ListItem>
                    <asp:ListItem Value="1">Ahri</asp:ListItem>
                    <asp:ListItem Value="2">Akali</asp:ListItem>
                    <asp:ListItem Value="3">Alistar</asp:ListItem>
                    <asp:ListItem Value="4">Amumu</asp:ListItem>
                    <asp:ListItem Value="5">Anivia</asp:ListItem>
                </asp:DropDownList><br />

                <asp:Button ID="Button1" runat="server" Text="Atualizar" OnClick="Button1_Click" />
            </div>

            <!---->
            <div id="RConfig">
                <!---->
                <asp:Label ID="Label7" runat="server" Text="Lado Vermelho"></asp:Label><br />

                <!---->
                <asp:Label ID="Label8" runat="server" Text="Jogador:"></asp:Label>
                <asp:DropDownList ID="RPlayer" runat="server">
                     <asp:ListItem Value="1">Docil</asp:ListItem>
                    <asp:ListItem Value="2">Tawna</asp:ListItem>
                    <asp:ListItem Value="3">Zuzu</asp:ListItem>
                    <asp:ListItem Value="4">Luluzinha</asp:ListItem>
                    <asp:ListItem Value="5">Raffozo</asp:ListItem>
                    <asp:ListItem Value="6">Ualbs</asp:ListItem>
                    <asp:ListItem Value="7">Hero</asp:ListItem>
                    <asp:ListItem Value="8">Mortha</asp:ListItem>
                    <asp:ListItem Value="9">StarryPeach</asp:ListItem>
                    <asp:ListItem Value="10">Bela</asp:ListItem>
                </asp:DropDownList><br />

                <!---->
                <asp:Label ID="Label9" runat="server" Text="Campeão:"></asp:Label>
                <asp:DropDownList ID="RChamp" runat="server">
                    <asp:ListItem Value="0">Aatrox</asp:ListItem>
                    <asp:ListItem Value="1">Ahri</asp:ListItem>
                    <asp:ListItem Value="2">Akali</asp:ListItem>
                    <asp:ListItem Value="3">Alistar</asp:ListItem>
                    <asp:ListItem Value="4">Amumu</asp:ListItem>
                    <asp:ListItem Value="5">Anivia</asp:ListItem>
                </asp:DropDownList><br />

                <!---->
                <asp:Label ID="Label10" runat="server" Text="Ban1:"></asp:Label>
                <asp:DropDownList ID="RBan1" runat="server">
                    <asp:ListItem Value="0">Aatrox</asp:ListItem>
                    <asp:ListItem Value="1">Ahri</asp:ListItem>
                    <asp:ListItem Value="2">Akali</asp:ListItem>
                    <asp:ListItem Value="3">Alistar</asp:ListItem>
                    <asp:ListItem Value="4">Amumu</asp:ListItem>
                    <asp:ListItem Value="5">Anivia</asp:ListItem>
                </asp:DropDownList><br />

                <!---->
                <asp:Label ID="Label11" runat="server" Text="Ban2:"></asp:Label>
                <asp:DropDownList ID="RBan2" runat="server">
                    <asp:ListItem Value="0">Aatrox</asp:ListItem>
                    <asp:ListItem Value="1">Ahri</asp:ListItem>
                    <asp:ListItem Value="2">Akali</asp:ListItem>
                    <asp:ListItem Value="3">Alistar</asp:ListItem>
                    <asp:ListItem Value="4">Amumu</asp:ListItem>
                    <asp:ListItem Value="5">Anivia</asp:ListItem>
                </asp:DropDownList><br />

                <!---->
                <asp:Label ID="Label12" runat="server" Text="Ban3:"></asp:Label>
                <asp:DropDownList ID="RBan3" runat="server">
                    <asp:ListItem Value="0">Aatrox</asp:ListItem>
                    <asp:ListItem Value="1">Ahri</asp:ListItem>
                    <asp:ListItem Value="2">Akali</asp:ListItem>
                    <asp:ListItem Value="3">Alistar</asp:ListItem>
                    <asp:ListItem Value="4">Amumu</asp:ListItem>
                    <asp:ListItem Value="5">Anivia</asp:ListItem>
                </asp:DropDownList><br />

                <asp:Button ID="Button2" runat="server" Text="Atualizar" />
                
            </div>
        </div>
    </form>
</body>
</html>
