<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Page;
use App\PageStatus;
use App\Component;

class ManageController extends Controller
{
    public function index()
    {
      return redirect()->route('manage.dashboard');
    }

    public function dashboard()
    {
      return view('manage.dashboard');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function start(Request $request) {
        $page = $this->getPage();
        $view = $this->routePage($page);
        return $view;
    }

    public function getPage() {
        $url = Route::getFacadeRoot()->current()->uri();
        if(strpos($url, 'manage/content/') !== false)
        {
            $url = $url . ".html";
            $url = str_replace("home.html", "", $url);
            $url = str_replace("manage/content/","",$url);
        }
        if(empty($url))
        {
            $url = '/';
        }
        return Page::with('seoTags')
                   ->with('components.elements.links')
                   ->with('components.elements.texts')
                   ->with('components.elements.images')
                   ->where('slug',$url)
                   ->firstorFail();
    }

    private function routePage(Page $page) {
        switch ($page->slug) {
            case '/':
                $page->slug = '/';
                return $this->home($page);
                break;
            case'servicos.html':
                return $this->servicos($page);
                break;               
            case'vig-patrimonial.html':
                return $this->vigPatrimonial($page);
                break;                                               
            case'vig-pessoal-escolta.html':
                return $this->vigPessoalEscolta($page);
                break;
            case'portaria-recepcao.html':
                return $this->portariaRecepcao($page);
                break;
            case'seg-eletronica.html':
                return $this->segEletronica($page);
                break;
            case'24h.html':
                return $this->mon24h($page);
                break;
            case'pro-control.html':
                return $this->proControl($page);
                break;
            case'limpeza.html':
                return $this->limpeza($page);
                break;
            case'servicos-gerais.html':
                return $this->servicosGerais($page);
                break;
            case'atuacao.html':
                return $this->atuacao($page);
                break;
            case'grupo.html':
                return $this->grupo($page);
                break;
            case'conheca.html':
                return $this->conheca($page);
                break;
            case'resp-social.html':
                return $this->respSocial($page);
                break;
            case'pro-acao.html':
                return $this->proAcao($page);
                break;
            case'pro-acao-campanha.html':
                return $this->proAcaoCampanha($page);
                break;                
            case'clientes.html':
                return $this->clientes($page);
                break;
            case'rh.html':
                return $this->rh($page);
                break;
            case'fale-conosco.html':
                return $this->faleConosco($page);
                break;
            case'sac.html':
                return $this->sac($page);
                break;
            case'trabalhe-conosco.html':
                return $this->trabalheConosco($page);
                break;
            case'fornecedores.html':
                return $this->fornecedores($page);
                break;
            case'contatos.html':
                return $this->contatos($page);
                break;
            case'proposta.html':
                return $this->proposta($page);
                break;                
            default:
                    return dd($page); // Comportamento Inesperado -> provavelmente encaminha para página de erro 404.
                break;
        }
    }

    private function home(Page $page) {
        foreach ($page->buildPageComponents() as $component) {
            if ($component->id === 1) {
                $banner = $component->toArray();
            } else if ($component->id === 2) {
                $boxes = $component->toArray();
            } else if ($component->id === 3) {
                $highlights = $component->toArray();
            } else if ($component->id === 4) {
                $posts = $component->toArray();
            } else if ($component->id === 5) {
                $leads = $component->toArray();
            } else if ($component->id === 6) {
                $videos = $component->toArray();
            }
            else
            {
                dd("Erro: Os componentes desta página não foram devidamente registrados no banco de dados."); //Erro
            }
        }
        return view('manage.website.homepage')->withBanner($banner)
                        ->withBoxes($boxes)
                        ->withHighlights($highlights)
                        ->withPosts($posts)
                        ->withLeads($leads)
                        ->withVideos($videos)
                        ->withPage($page);
    }

    private function servicos(Page $page) {
        foreach ($page->buildPageComponents() as $component) {
            if ($component->id === 7) {
                $banners = $component->toArray();
            }
            else if ($component->id === 8) {
                    $boxes = $component->toArray();
            }
            else
            {
                //Erro
                dd("Erro: Os componentes desta página não foram devidamente registrados no banco de dados.");
            }

        }
        return view('manage.website.servicos')->withBanners($banners)
                                       ->withBoxes($boxes)
                                       ->withPage($page);
    }

    private function vigPatrimonial(Page $page) {
        foreach ($page->buildPageComponents() as $component) {
            if ($component->id === 9) {
                $banners = $component->toArray();
            }
            else if ($component->id === 10) {
                $boxes = $component->toArray();
            }
            else
            {
                //Erro
                dd("Erro: Os componentes desta página não foram devidamente registrados no banco de dados.");
            }
        }
        return view('manage.website.vigPatrimonial')->withBanners($banners)
                                       ->withBoxes($boxes)
                                       ->withPage($page);
    }

    private function vigPessoalEscolta(Page $page) {
        foreach ($page->buildPageComponents() as $component) {
            if ($component->id === 11) {
                $banners = $component->toArray();
            }
            else if ($component->id === 12) {
                $boxes = $component->toArray();
            }
            else
            {
                //Erro
                dd("Erro: Os componentes desta página não foram devidamente registrados no banco de dados.");
            }
        }
        return view('manage.website.vigPessoalEscolta')->withBanners($banners)
                                       ->withBoxes($boxes)
                                       ->withPage($page);
    }

    private function portariaRecepcao(Page $page) {
        foreach ($page->buildPageComponents() as $component) {
            if ($component->id === 13) {
                $banners = $component->toArray();
            }
            else if ($component->id === 14) {
                $boxes = $component->toArray();
            }
            else
            {
                //Erro
                dd("Erro: Os componentes desta página não foram devidamente registrados no banco de dados.");
            }
        }
        return view('manage.website.portariaRecepcao')->withBanners($banners)
                                       ->withBoxes($boxes)
                                       ->withPage($page);
    }

    private function segEletronica(Page $page) {
        foreach ($page->buildPageComponents() as $component) {
            if ($component->id === 15) {
                $banners = $component->toArray();
            }
            else if ($component->id === 16) {
                $textIntro = $component->toArray();
            }
            
            else if ($component->id === 17) {
                $boxes = $component->toArray();
            }
            else
            {
                //Erro
                dd("Erro: Os componentes desta página não foram devidamente registrados no banco de dados.");
            }
        }
        return view('manage.website.segEletronica')->withBanners($banners)
                                                ->withTextIntro($textIntro)
                                                ->withBoxes($boxes)
                                                ->withPage($page);
    }

    private function mon24h(Page $page) {
            foreach ($page->buildPageComponents() as $component) {
                if ($component->id === 18) {
                    $banners = $component->toArray();
                }
                else if ($component->id === 19) {
                    $textIntro = $component->toArray();
                }
                
                else if ($component->id === 20) {
                    $boxes = $component->toArray();
            }
            else
            {
                //Erro
                dd("Erro: Os componentes desta página não foram devidamente registrados no banco de dados.");
            }
        }
        return view('manage.website.24h')->withBanners($banners)
                                                ->withTextIntro($textIntro)
                                                ->withBoxes($boxes)
                                                ->withPage($page);
    }

    private function proControl($page){
        foreach ($page->buildPageComponents() as $component) {
                if ($component->id === 21) {
                    $banners = $component->toArray();
                }
                else if ($component->id === 22) {
                    $textIntro = $component->toArray();
                }
                else if ($component->id === 23) {
                    $boxes = $component->toArray();
                }
                else if ($component->id === 24) {
                    $links = $component->toArray();
                }
                else
                {
                    // Erro
                    dd("Erro: Os componentes desta página não foram devidamente registrados no banco de dados.");
                }
        }
        return view('manage.website.proControl')->withBanners($banners)
                                                ->withTextIntro($textIntro)
                                                ->withBoxes($boxes)
                                                ->withLinks($links)
                                                ->withPage($page);
    }
    
    private function limpeza($page){
        foreach ($page->buildPageComponents() as $component) {
                if ($component->id === 25) {
                    $banners = $component->toArray();
                }
                else if ($component->id === 26) {
                    $boxes = $component->toArray();
                }
                else
                {
                    // Erro
                    dd("Erro: Os componentes desta página não foram devidamente registrados no banco de dados.");
                }
        }
        return view('manage.website.limpeza')->withBanners($banners)
                                                ->withBoxes($boxes)
                                                ->withPage($page);

    }
    
    private function servicosGerais($page){
        foreach ($page->buildPageComponents() as $component) {
                if ($component->id === 27) {
                    $banners = $component->toArray();
                }
                else if ($component->id === 28) {
                    $textIntro = $component->toArray();
                }
                
                else if ($component->id === 29) {
                    $boxes = $component->toArray();
                }
                else
                {
                    //Erro
                    dd("Erro: Os componentes desta página não foram devidamente registrados no banco de dados.");
                }
        }
        return view('manage.website.servicosGerais')->withBanners($banners)
                                                ->withTextIntro($textIntro)
                                                ->withBoxes($boxes)
                                                ->withPage($page);
    }
    
    private function atuacao($page){
        foreach ($page->buildPageComponents() as $component) {
                if ($component->id === 30) {
                    $banners = $component->toArray();
                }
                else if ($component->id === 31) {
                    $textIntro = $component->toArray();
                }
                
                else if ($component->id === 32) {
                    $boxes = $component->toArray();
                }
                else
                {
                    //Erro
                    dd("Erro: Os componentes desta página não foram devidamente registrados no banco de dados.");
                }
        }
        return view('manage.website.atuacao')->withBanners($banners)
                                                ->withTextIntro($textIntro)
                                                ->withBoxes($boxes)
                                                ->withPage($page);
    }
    
    private function grupo($page){
       foreach ($page->buildPageComponents() as $component) {
                if ($component->id === 33) {
                    $banners = $component->toArray();
                }
                else if ($component->id === 34) {
                    $textIntro = $component->toArray();
                }
                else if ($component->id === 35) {
                    $links = $component->toArray();
                }
                else
                {
                    //Erro
                    dd("Erro: Os componentes desta página não foram devidamente registrados no banco de dados.");
                }
        }
        return view('manage.website.grupo')->withBanners($banners)
                                                ->withTextIntro($textIntro)
                                                ->withLinks($links)
                                                ->withPage($page);
    }
    
    private function conheca($page){
        foreach ($page->buildPageComponents() as $component) {
            if ($component->id === 36) {
                $banners = $component->toArray();
            }
            if ($component->id === 37) {
                $pageTitle = $component->toArray();
            }
            if ($component->id === 38) {
                 $textIntro = $component->toArray();
            }

            if ($component->id === 39) {
                $texts = $component->toArray();
            }

            if ($component->id === 40) {
                 $textIntroBox3 = $component->toArray();
            }
            
            if ($component->id === 41) {
                $certs = $component->toArray();
            }
        }
        return view('manage.website.conheca')->withBanners($banners)
                                    ->withPageIntroTitle($pageTitle)
                                    ->withTextIntro($textIntro)
                                    ->withTexts($texts)
                                    ->withTextIntroBox3($textIntroBox3)
                                    ->withCerts($certs)
                                    ->withPage($page);
    }
    
    private function respSocial($page){
        foreach ($page->buildPageComponents() as $component) {
            if ($component->id === 42) {
                $banners = $component->toArray();
            }
            if ($component->id === 43) {
                 $textIntro = $component->toArray();
            }
            if ($component->id === 44) {
                $boxes = $component->toArray();
            }
        }
        return view('manage.website.respSocial')->withBanners($banners)
                                         ->withTextIntro($textIntro)
                                         ->withBoxes($boxes)
                                         ->withPage($page);
    }
    
    private function proAcao($page) {
        foreach ($page->buildPageComponents() as $component) {
            if ($component->id === 45) {
                $banners = $component->toArray();
            }
            if ($component->id === 46) {
                 $textIntro = $component->toArray();
            }
            if ($component->id === 47) {
                $boxes = $component->toArray();
            }
            
            if ($component->id === 48) {
                $slides = $component->toArray();
            }
        }
        return view('manage.website.proAcao')->withBanners($banners)
                                      ->withTextIntro($textIntro)
                                      ->withBoxes($boxes)
                                      ->withSlides($slides)
                                      ->withPage($page);
    }

    private function proAcaoCampanha($page){
        $pageStatus = $this->isCampaingActiveById($page->id);
        if(empty($pageStatus))
        {
            $pageStatus = NULL;
        }
        foreach ($page->buildPageComponents() as $component) {
            if ($component->id === 49) {
                $banners = $component->toArray();
            }
            if ($component->id === 50) {
                 $textIntro = $component->toArray();
            }
            
            if ($component->id === 51) {
                $boxes = $component->toArray();
            }
        }
        return view('manage.website.proAcaoCampanha')->withBanners($banners)
                                                     ->withTextIntro($textIntro)
                                                     ->withBoxes($boxes)
                                                     ->withPageStatus($pageStatus)
                                                     ->withPage($page);
    }
    
    private function clientes($page){
        foreach ($page->buildPageComponents() as $component) {
            if ($component->id === 52) {
                $banners = $component->toArray();
            }
            if ($component->id === 53) {
                 $textIntro = $component->toArray();
            }
            if ($component->id === 54) {
                $logos = $component->toArray();
            }
        }
        return view('manage.website.clientes')->withBanners($banners)
                                      ->withTextIntro($textIntro)
                                      ->withLogos($logos)
                                      ->withPage($page);
    }
    
    private function rh($page){
        foreach ($page->buildPageComponents() as $component) {
            if ($component->id === 55) {
                $banners = $component->toArray();
            }
            else if ($component->id === 56) {
                $textIntro = $component->toArray();
            }
            
            else if ($component->id === 57) {
                $boxes = $component->toArray();
            }
            else
            {
                //Erro
                dd("Erro: Os componentes desta página não foram devidamente registrados no banco de dados.");
            }
        }
        return view('manage.website.rh')->withBanners($banners)
                                 ->withTextIntro($textIntro)
                                 ->withBoxes($boxes)
                                 ->withPage($page);
    }
    
    private function faleConosco($page){
        foreach ($page->buildPageComponents() as $component) {
                if ($component->id === 58) {
                    $banners = $component->toArray();
                }
                else if ($component->id === 59) {
                    $textIntro = $component->toArray();
                }
                
                else if ($component->id === 60) {
                    $links = $component->toArray();
                }
                else
                {
                    //Erro
                    dd("Erro: Os componentes desta página não foram devidamente registrados no banco de dados.");
                }
        }
        return view('manage.website.faleConosco')->withBanners($banners)
                                          ->withTextIntro($textIntro)
                                          ->withLinks($links)
                                          ->withPage($page);
    }
    
    private function sac($page){
        foreach ($page->buildPageComponents() as $component) {
                if ($component->id === 61) {
                    $banners = $component->toArray();
                }
                else if ($component->id === 62) {
                    $textIntro = $component->toArray();
                }
                else
                {
                    //Erro
                    dd("Erro: Os componentes desta página não foram devidamente registrados no banco de dados.");
                }
        }
        return view('manage.website.sac')->withBanners($banners)
                                  ->withTextIntro($textIntro)
                                  ->withPage($page);
    }
    
    private function trabalheConosco($page){
        foreach ($page->buildPageComponents() as $component) {
                if ($component->id === 63) {
                    $banners = $component->toArray();
                }
                else if ($component->id === 64) {
                    $textIntro = $component->toArray();
                }
                else
                {
                    //Erro
                    dd("Erro: Os componentes desta página não foram devidamente registrados no banco de dados.");
                }
        }
        return view('manage.website.trabalheConosco')->withBanners($banners)
                                  ->withTextIntro($textIntro)
                                  ->withPage($page);

    }
    
    private function fornecedores($page){
        foreach ($page->buildPageComponents() as $component) {
                if ($component->id === 65) {
                    $banners = $component->toArray();
                }
                else if ($component->id === 66) {
                    $textIntro = $component->toArray();
                }
                else
                {
                    //Erro
                    dd("Erro: Os componentes desta página não foram devidamente registrados no banco de dados.");
                }
        }
        return view('manage.website.fornecedores')->withBanners($banners)
                                  ->withTextIntro($textIntro)
                                  ->withPage($page);

    }
    
    private function contatos($page){
        foreach ($page->buildPageComponents() as $component) {
                if ($component->id === 67) {
                    $banners = $component->toArray();
                }
                else if ($component->id === 68) {
                    $imageIntro = $component->toArray();
                }
                else if ($component->id === 69) {
                    $textIntro = $component->toArray();
                }
                else if ($component->id === 70) {
                    $boxes = $component->toArray();
                }
                else
                {
                    //Erro
                    dd("Erro: Os componentes desta página não foram devidamente registrados no banco de dados.");
                }
        }
        return view('manage.website.contatos')->withBanners($banners)
                                              ->withTextIntro($textIntro)
                                              ->withImageIntro($imageIntro)
                                              ->withBoxes($boxes)
                                              ->withPage($page);
    }
    private function proposta($page){
        foreach ($page->buildPageComponents() as $component) {
                if ($component->id === 71) {
                    $banners = $component->toArray();
                }
                else if ($component->id === 72) {
                    $textIntro = $component->toArray();
                }
                else
                {
                    //Erro
                    dd("Erro: Os componentes desta página não foram devidamente registrados no banco de dados.");
                }
        }
        return view('manage.website.proposta')->withBanners($banners)
                                           ->withTextIntro($textIntro)
                                           ->withPage($page);
    }

    protected function isCampaingActive($pageSlug)
    {
        if( Page::where('slug', $pageSlug)->value("active") )
        {
            return TRUE;
        }
        else return FALSE;
    }

    protected function isCampaingActiveById($pageID)
    {
        if( Page::where('id', $pageID)->value("active") )
        {
            return TRUE;
        }
        else return FALSE;
    }

}
