# Description
Le module PrestaShop **Dronic©** permet très facilement d'ajouter à votre site Prestashop un configurateur de drone FPV !
Ce module utilise des Hooks, plus précisément **LeftColumn** pour l'intégration sur l'ensemble des pages et **Header** pour la gestion du CSS et js du module.
Une fois le module ajouté, il intègre automatiquement une nouvelle card sur le côté de vos pages.
Ces dernières redirigent automatiquement sur une page générée par Dronic.

*Vous trouverez ci-dessous une courte présentation du module en vidéo.*

*HookDisplayLeftColumn()*
```java
    public function hookDisplayLeftColumn()
    {
        $this->context->smarty->assign([
            'ns_page_name' => Configuration::get('NS_DRONIC_PAGENAME'),
            'ns_page_link' => $this->context->link->getModuleLink('dronic', 'display')
          ]);
     
          return $this->display(__FILE__, 'dronic.tpl');
    }
```
*HookHeader()*
```java
    public function hookHeader()
    {
        $this->context->controller->addJS($this->_path.'/views/js/front.js');
        $this->context->controller->addCSS($this->_path.'/views/css/front.css');
    }
```
# Video de presentation
https://user-images.githubusercontent.com/45401519/117774558-f2b8a800-b239-11eb-9430-effc588e2de3.mp4


# Croquis
Avant de réaliser la page du configurateur, j'ai rapidement réalisé des croquis pour m'aider à la conception de ce dernier.

![Croquis](https://media.discordapp.net/attachments/519799997534044170/840638629180080178/dronic_mockup.png?width=528&height=676)

# Apparence du module
Un module avec une apparence professionnelle.
![Apparence du module](https://media.discordapp.net/attachments/671292077870415872/841568747697078312/unknown.png?width=1440&height=133)

# Page du configurateur
Page du configurateur en développement...
![Apparence du configurateur](https://media.discordapp.net/attachments/671292077870415872/841561726818451466/unknown.png?width=1281&height=676)

# Panneau de configuration
Panneau de configuration en développement...
![Panneau de configuration](https://media.discordapp.net/attachments/671292077870415872/841566258485788702/unknown.png?width=1440&height=328)

# Intégration automatique du module
Le module s'ajoute automatiquement à toute votre page.
![Intégration 1](https://media.discordapp.net/attachments/671292077870415872/841566990535491634/unknown.png?width=572&height=676)
![Intégration 2](https://media.discordapp.net/attachments/671292077870415872/841567063263674418/unknown.png)
