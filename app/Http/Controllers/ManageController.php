<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Page;
use App\PageStatus;
use App\Component;

define('imagesURL',"http://{$_SERVER['HTTP_HOST']}/dev/prosecurity/website/public/images/");

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
                    return dd($page);// Comportamento Inesperado -> provavelmente encaminha para página de erro 404.
                break;
        }
    }

    private function home(Page $page) {
        $banner = array();

        //dd(json_encode($page->seoTags->toArray()));
        foreach ($page->buildPageComponents() as $component) {
            if ($component->id === 1) {
                foreach ($component->elements as $element) {
                    $slide = new \stdClass();
                    if ($element->images->count() > 0) {
                        $slide->imageSrc = asset($element->images[0]->src);
                        $slide->imageAlt = $element->images[0]->alt;
                    }
                    if ($element->links->count() > 0) {
                        $slide->link = $element->links[0]->url;
                        $slide->linkTarget = $element->links[0]->target;
                        $slide->linkValue = "Link Ativo";
                    }
                    else
                    {
                        $slide->linkValue = "Link Inativo";   
                    }
                    $banner[$element->id] = $slide;
                    unset($slide);
                }
            } else if ($component->id === 2) {
                foreach ($component->elements as $element) {
                    $box = new \stdClass();
                    if ($element->images->count() > 0) {
                        $box->imageSrc = $element->images[0]->src;
                        $box->imageAlt = $element->images[0]->alt;
                    }
                    if ($element->links->count() > 0) {
                        $box->link = $element->links[0]->url;
                        $box->linkTarget = $element->links[0]->target;
                    }
                    if ($element->texts->count() > 0) {
                        $box->title = $element->texts[0]->content;
                    }
                    $boxes[$element->id] = $box;
                    unset($box);
                }
            } else if ($component->id === 3) {
                foreach ($component->elements as $element) {
                    $highlight = new \stdClass();
                    if ($element->images->count() > 0) {
                        $highlight->imageSrc = $element->images[0]->src;
                        $highlight->imageAlt = $element->images[0]->alt;
                    }
                    if ($element->links->count() > 0) {
                        $highlight->link = $element->links[0]->url;
                        $highlight->linkTarget = $element->links[0]->target;
                    }
                    if ($element->texts->count() > 0) {
                        $highlight->title = $element->texts[0]->title;
                    }
                }
            } else if ($component->id === 4) {
                
                foreach ($component->elements as $element) {
                    $post = new \stdClass();
                    if ($element->images->count() > 0) {
                        $post->imageSrc = $element->images[0]->src;
                        $post->imageAlt = $element->images[0]->alt;
                    }
                    if ($element->links->count() > 0) {
                        $post->link = $element->links[0]->url;
                        $post->linkTarget = $element->links[0]->target;
                        $post->linkText = $element->links[0]->text;
                    }
                    if ($element->texts->count() > 0) {
                        if(!empty($element->texts[0]->title))
                        {
                        $post->title = $element->texts[0]->title;
                        }
                        $post->content = $element->texts[0]->content;
                    }
                    $posts[$element->id] = $post;
                    unset($post);
                }
            }
            else if ($component->id === 5) {
                foreach ($component->elements as $element) {
                    $lead = new \stdClass();
                    if ($element->images->count() > 0) {
                        $lead->imageSrc = $element->images[0]->src;
                        $lead->imageAlt = $element->images[0]->alt;
                    }
                    if ($element->links->count() > 0) {
                        $lead->link = $element->links[0]->url;
                        $lead->linkTarget = $element->links[0]->target;
                        $lead->linkText = $element->links[0]->text;
                    }
                    if ($element->texts->count() > 0) {
                        if(!empty($element->texts[0]->title))
                        {
                            $lead->title = $element->texts[0]->title;
                        }
                        if(!empty($element->texts[0]->content))
                        {
                            if(is_numeric($element->texts[0]->content))
                            {
                                if( substr($element->texts[0]->content, 0, 1) === '+' )
                                {
                                    $lead->symbol = substr($element->texts[0]->content, 0, 1);
                                    $lead->position = 'before';
                                    $lead->counter = TRUE;
                                    $lead->content = substr($element->texts[0]->content,1,strlen($element->texts[0]->content) );
                                }
                                else if( substr($element->texts[0]->content, 0, 1) == '-' )
                                {
                                    $lead->symbol = substr($element->texts[0]->content, 0, 1);
                                    $lead->position = 'before';
                                    $lead->counter = TRUE;
                                    $lead->content = substr($element->texts[0]->content,1,strlen($element->texts[0]->content) );
                                }
                                else {
                                    $lead->symbol = NULL;
                                    $lead->position = NULL;
                                    $lead->counter = TRUE;
                                    $lead->content = $element->texts[0]->content;
                                }

                            } else {

                                if( !is_numeric( substr($element->texts[0]->content, 0, 1) ) )
                                {
                                    $lead->symbol = substr($element->texts[0]->content, 0, 1);
                                    $lead->position = 'before';
                                    $lead->counter = TRUE;
                                    $lead->content = substr($element->texts[0]->content,1,strlen($element->texts[0]->content) );
                                } 
                                else if( !is_numeric( substr($element->texts[0]->content,strlen($element->texts[0]->content) - 1,strlen($element->texts[0]->content) ) ) ) 
                                {
                                    $lead->symbol = substr($element->texts[0]->content,strlen($element->texts[0]->content) - 1,strlen($element->texts[0]->content) );
                                    $lead->position = 'after';
                                    $lead->counter = TRUE;
                                    $lead->content = substr($element->texts[0]->content,0, strlen($element->texts[0]->content)-1);
                                }

                            }
                            $leads[$element->id] = $lead;
                            unset($lead);
                        }
                    }
                }
            } else if ($component->id === 6) {
                
                foreach ($component->elements as $element) {
                    $video = new \stdClass();
                    if ($element->images->count() > 0) {
                        $video->imageSrc = $element->images[0]->src;
                        $video->imageAlt = $element->images[0]->alt;
                    }
                    if ($element->links->count() > 0) {
                        $video->link = $element->links[0]->url;
                        $video->linkTarget = $element->links[0]->target;
                        $video->linkText = $element->links[0]->text;
                    }
                    if ($element->texts->count() > 0) {
                        if(!empty($element->texts[0]->title))
                        {
                        $video->title = $element->texts[0]->title;
                        }
                        $video->content = $element->texts[0]->content;
                    }
                    $videos[$element->id] = $video;
                    unset($video);
                }
            }
            else
            {
                //Erro
                dd("Erro: Os componentes desta página não foram devidamente registrados no banco de dados.");
            }
        }
        return view('manage.website.homepage')->withBanner($banner)
                        ->withBoxes($boxes)
                        ->withHighlights($highlight)
                        ->withPosts($posts)
                        ->withLeads($leads)
                        ->withVideos($videos)
                        ->withPage($page);
    }

    private function servicos(Page $page) {
        foreach ($page->buildPageComponents() as $component) {
            if ($component->id === 7) {
                foreach ($component->elements as $element) {
                    $banner = new \stdClass();
                    if ($element->images->count() > 0) {
                        $banner->imageSrc = $element->images[0]->src;
                        $banner->imageAlt = $element->images[0]->alt;
                    }
                    $banners[$element->id] = $banner;
                    unset($slide);
                }
            }
            else if ($component->id === 8) {
                foreach ($component->elements as $element) {
                    $box = new \stdClass();
                    if ($element->images->count() > 0) {
                        foreach($element->images as $image)
                        {
                            $box->imageSrc[] = $image->src;
                            $box->imageAlt[] = $image->alt;
                        }
                    }
                    if ($element->links->count() > 0) {
                        $box->link = $element->links[0]->url;
                        $box->linkTarget = $element->links[0]->target;
                    }
                    if ($element->texts->count() > 0) {
                        if(!empty($element->texts[0]->title))
                        {
                            $box->title = $element->texts[0]->title;
                        }
                    }
                    $boxes[$element->id] = $box;
                    unset($slide);
                }
            }
            else
            {
                //Erro
                dd("Erro: Os componentes desta página não foram devidamente registrados no banco de dados.");
            }

        }
        return view('manage.website.servicos')->withBanners($banner)
                                       ->withBoxes($boxes)
                                       ->withPage($page);
    }

    private function vigPatrimonial(Page $page) {
        foreach ($page->buildPageComponents() as $component) {
            if ($component->id === 9) {
                foreach ($component->elements as $element) {
                    $banner = new \stdClass();
                    if ($element->images->count() > 0) {
                        $banner->imageSrc = $element->images[0]->src;
                        $banner->imageAlt = $element->images[0]->alt;
                    }
                    $banners[$element->id] = $banner;
                    unset($slide);
                }
            }
            else if ($component->id === 10) {
                foreach ($component->elements as $element) {
                    $box = new \stdClass();
                    if ($element->texts->count() > 0) {
                        if(!empty($element->texts[0]->title))
                        {
                            $box->title = $element->texts[0]->title;
                        }
                        if(!empty($element->texts[0]->content))
                        {
                            $box->content = $element->texts[0]->content;
                        }
                    }
                    $boxes[$element->id] = $box;
                    unset($box);
                }
            }
            else
            {
                //Erro
                dd("Erro: Os componentes desta página não foram devidamente registrados no banco de dados.");
            }
        }
        return view('manage.website.vigPatrimonial')->withBanners($banner)
                                       ->withBoxes($boxes)
                                       ->withPage($page);
    }

    private function vigPessoalEscolta(Page $page) {
        foreach ($page->buildPageComponents() as $component) {
            if ($component->id === 11) {
                foreach ($component->elements as $element) {
                    $banner = new \stdClass();
                    if ($element->images->count() > 0) {
                        $banner->imageSrc = $element->images[0]->src;
                        $banner->imageAlt = $element->images[0]->alt;
                    }
                    $banners[$element->id] = $banner;
                    unset($slide);
                }
            }
            else if ($component->id === 12) {
                foreach ($component->elements as $element) {
                    $box = new \stdClass();
                    if ($element->texts->count() > 0) {
                        if(!empty($element->texts[0]->title))
                        {
                            $box->title = $element->texts[0]->title;
                        }
                        if(!empty($element->texts[0]->content))
                        {
                            $box->content = $element->texts[0]->content;
                        }
                    }
                    $boxes[$element->id] = $box;
                    unset($box);
                }
            }
            else
            {
                //Erro
                dd("Erro: Os componentes desta página não foram devidamente registrados no banco de dados.");
            }
        }
        return view('manage.website.vigPessoalEscolta')->withBanners($banner)
                                       ->withBoxes($boxes)
                                       ->withPage($page);
    }

    private function portariaRecepcao(Page $page) {
        foreach ($page->buildPageComponents() as $component) {
            if ($component->id === 13) {
                foreach ($component->elements as $element) {
                    $banner = new \stdClass();
                    if ($element->images->count() > 0) {
                        $banner->imageSrc = $element->images[0]->src;
                        $banner->imageAlt = $element->images[0]->alt;
                    }
                    $banners[$element->id] = $banner;
                    unset($slide);
                }
            }
            else if ($component->id === 14) {
                foreach ($component->elements as $element) {
                    $box = new \stdClass();
                    if ($element->texts->count() > 0) {
                        if(!empty($element->texts[0]->title))
                        {
                            $box->title = $element->texts[0]->title;
                        }
                        if(!empty($element->texts[0]->content))
                        {
                            $box->content = $element->texts[0]->content;
                        }
                    }
                    $boxes[$element->id] = $box;
                    unset($box);
                }
            }
            else
            {
                //Erro
                dd("Erro: Os componentes desta página não foram devidamente registrados no banco de dados.");
            }
        }
        return view('manage.website.portariaRecepcao')->withBanners($banner)
                                       ->withBoxes($boxes)
                                       ->withPage($page);
    }

    private function segEletronica(Page $page) {
        foreach ($page->buildPageComponents() as $component) {
            if ($component->id === 15) {
                foreach ($component->elements as $element) {
                    $banner = new \stdClass();
                    if ($element->images->count() > 0) {
                        $banner->imageSrc = $element->images[0]->src;
                        $banner->imageAlt = $element->images[0]->alt;
                    }
                    $banners[$element->id] = $banner;
                    unset($slide);
                }
            }
            else if ($component->id === 16) {
                foreach ($component->elements as $element) {
                    $textIntro = new \stdClass();
                    if ($element->texts->count() > 0) {
                        if(!empty($element->texts[0]->title))
                        {
                            $textIntro->title = $element->texts[0]->title;
                        }
                        if(!empty($element->texts[0]->content))
                        {
                            $textIntro->content = $element->texts[0]->content;
                        }
                        $textIntro->elementId = $element->id;
                    }
                }
            }
            
            else if ($component->id === 17) {
                foreach ($component->elements as $element) {
                    $box = new \stdClass();
                    if ($element->texts->count() > 0) {
                        if(!empty($element->texts[0]->title))
                        {
                            $box->title = $element->texts[0]->title;
                        }
                        if(!empty($element->texts[0]->content))
                        {
                            $box->content = $element->texts[0]->content;
                        }
                    }
                    $boxes[$element->id] = $box;
                    unset($box);
                }
            }
            else
            {
                //Erro
                dd("Erro: Os componentes desta página não foram devidamente registrados no banco de dados.");
            }
        }
        return view('manage.website.segEletronica')->withBanners($banner)
                                                ->withTextIntro($textIntro)
                                                ->withBoxes($boxes)
                                                ->withPage($page);
    }

    private function mon24h(Page $page) {
            foreach ($page->buildPageComponents() as $component) {
                if ($component->id === 18) {
                    foreach ($component->elements as $element) {
                        $banner = new \stdClass();
                        if ($element->images->count() > 0) {
                            $banner->imageSrc = $element->images[0]->src;
                            $banner->imageAlt = $element->images[0]->alt;
                        }
                        $banners[$element->id] = $banner;
                        unset($slide);
                    }
                }
                else if ($component->id === 19) {
                    foreach ($component->elements as $element) {
                        $textIntro = new \stdClass();
                        if ($element->texts->count() > 0) {
                            if(!empty($element->texts[0]->title))
                            {
                                $textIntro->title = $element->texts[0]->title;
                            }
                            if(!empty($element->texts[0]->content))
                            {
                                $textIntro->content = $element->texts[0]->content;
                            }
                            $textIntro->elementId = $element->id;
                        }
                    }
                }
                
                else if ($component->id === 20) {
                    foreach ($component->elements as $element) {
                    $box = new \stdClass();
                    if ($element->texts->count() > 0) {
                        if(!empty($element->texts[0]->title))
                        {
                            $box->title = $element->texts[0]->title;
                        }
                        if(!empty($element->texts[0]->content))
                        {
                            $box->content = $element->texts[0]->content;
                        }
                    }
                    $boxes[$element->id] = $box;
                    unset($box);
                }
            }
            else
            {
                //Erro
                dd("Erro: Os componentes desta página não foram devidamente registrados no banco de dados.");
            }
        }
        return view('manage.website.24h')->withBanners($banner)
                                                ->withTextIntro($textIntro)
                                                ->withBoxes($boxes)
                                                ->withPage($page);
    }

    private function proControl($page){
        foreach ($page->buildPageComponents() as $component) {
                if ($component->id === 21) {
                    foreach ($component->elements as $element) {
                        $banner = new \stdClass();
                        if ($element->images->count() > 0) {
                            $banner->imageSrc = $element->images[0]->src;
                            $banner->imageAlt = $element->images[0]->alt;
                        }
                        $banners[$element->id] = $banner;
                        unset($slide);
                    }
                }
                else if ($component->id === 22) {
                    foreach ($component->elements as $element) {
                        $textIntro = new \stdClass();
                        if ($element->texts->count() > 0) {
                            if(!empty($element->texts[0]->title))
                            {
                                $textIntro->title = $element->texts[0]->title;
                            }
                            if(!empty($element->texts[0]->content))
                            {
                                $textIntro->content = $element->texts[0]->content;
                            }
                            $textIntro->elementId = $element->id;
                        }
                    }
                }
                else if ($component->id === 23) {
                    $i = 1;
                    foreach ($component->elements as $element) {
                        $box = new \stdClass();
                        if ($element->texts->count() > 0) {
                            $box->id = $i;
                            if(!empty($element->texts[0]->title))
                            {
                                $box->title = $element->texts[0]->title;
                            }
                            if(!empty($element->texts[0]->content))
                            {
                                $box->content = $element->texts[0]->content;
                            }
                            $i++;
                        }
                        $boxes[$element->id] = $box;
                        unset($box);
                    }
                }
                else if ($component->id === 24) {
                    foreach ($component->elements as $element) {
                        $link = new \stdClass();
                        if ($element->links->count() > 0) {
                            if(!empty($element->links[0]->url))
                            {
                                $link->link = $element->links[0]->url;
                            }
                            if(!empty($element->links[0]->text))
                            {
                                $link->text = $element->links[0]->text;
                            }
                            $link->target = $element->links[0]->target;
                        }
                        $links[$element->id] = $link;
                        unset($link);
                    }
                }
                else
                {
                    // Erro
                    dd("Erro: Os componentes desta página não foram devidamente registrados no banco de dados.");
                }
        }
        return view('manage.website.proControl')->withBanners($banner)
                                                ->withTextIntro($textIntro)
                                                ->withBoxes($boxes)
                                                ->withLinks($links)
                                                ->withPage($page);
    }
    
    private function limpeza($page){
        foreach ($page->buildPageComponents() as $component) {
                if ($component->id === 25) {
                    foreach ($component->elements as $element) {
                        $banner = new \stdClass();
                        if ($element->images->count() > 0) {
                            $banner->imageSrc = $element->images[0]->src;
                            $banner->imageAlt = $element->images[0]->alt;
                        }
                        $banners[$element->id] = $banner;
                        unset($slide);
                    }
                }
                else if ($component->id === 26) {
                    $i = 1;
                    foreach ($component->elements as $element) {
                        $box = new \stdClass();
                        if ($element->texts->count() > 0) {
                            $box->id = $i;
                            if(!empty($element->texts[0]->title))
                            {
                                $box->title = $element->texts[0]->title;
                            }
                            if(!empty($element->texts[0]->content))
                            {
                                $box->content = $element->texts[0]->content;
                            }
                            $i++;
                        }
                        $boxes[$element->id] = $box;
                        unset($box);
                    }
                }
                else
                {
                    // Erro
                    dd("Erro: Os componentes desta página não foram devidamente registrados no banco de dados.");
                }
        }
        return view('manage.website.limpeza')->withBanners($banner)
                                                ->withBoxes($boxes)
                                                ->withPage($page);

    }
    
    private function servicosGerais($page){
        foreach ($page->buildPageComponents() as $component) {
                if ($component->id === 27) {
                    foreach ($component->elements as $element) {
                        $banner = new \stdClass();
                        if ($element->images->count() > 0) {
                            $banner->imageSrc = $element->images[0]->src;
                            $banner->imageAlt = $element->images[0]->alt;
                        }
                        $banners[$element->id] = $banner;
                        unset($slide);
                    }
                }
                else if ($component->id === 28) {
                    foreach ($component->elements as $element) {
                        $textIntro = new \stdClass();
                        if ($element->texts->count() > 0) {
                            if(!empty($element->texts[0]->title))
                            {
                                $textIntro->title = $element->texts[0]->title;
                            }
                            if(!empty($element->texts[0]->content))
                            {
                                $textIntro->content = $element->texts[0]->content;
                            }
                            $textIntro->elementId = $element->id;
                        }
                    }
                }
                
                else if ($component->id === 29) {
                    $i = 1;
                    foreach ($component->elements as $element) {
                        $box = new \stdClass();
                        if ($element->texts->count() > 0) {
                            $box->id = $i;
                            if(!empty($element->texts[0]->title))
                            {
                                $box->title = $element->texts[0]->title;
                            }
                            if(!empty($element->texts[0]->content))
                            {
                                $box->content = $element->texts[0]->content;
                            }
                            $i++;
                        }
                        $boxes[$element->id] = $box;
                        unset($box);
                    }
                }
                else
                {
                    //Erro
                    dd("Erro: Os componentes desta página não foram devidamente registrados no banco de dados.");
                }
        }
        return view('manage.website.servicosGerais')->withBanners($banner)
                                                ->withTextIntro($textIntro)
                                                ->withBoxes($boxes)
                                                ->withPage($page);
    }
    
    private function atuacao($page){
        foreach ($page->buildPageComponents() as $component) {
                if ($component->id === 30) {
                    foreach ($component->elements as $element) {
                        $banner = new \stdClass();
                        if ($element->images->count() > 0) {
                            $banner->imageSrc = $element->images[0]->src;
                            $banner->imageAlt = $element->images[0]->alt;
                        }
                        $banners[$element->id] = $banner;
                        unset($slide);
                    }
                }
                else if ($component->id === 31) {
                    foreach ($component->elements as $element) {
                        $textIntro = new \stdClass();
                        if ($element->texts->count() > 0) {
                            if(!empty($element->texts[0]->title))
                            {
                                $textIntro->title = $element->texts[0]->title;
                            }
                            if(!empty($element->texts[0]->content))
                            {
                                $textIntro->content = $element->texts[0]->content;
                            }
                            $textIntro->elementId = $element->id;
                        }
                    }
                }
                
                else if ($component->id === 32) {
                    $i = 1;
                    foreach ($component->elements as $element) {
                        $box = new \stdClass();
                        if ($element->texts->count() > 0) {
                            $box->id = $i;
                            if(!empty($element->texts[0]->title))
                            {
                                $box->title = $element->texts[0]->title;
                            }
                            if(!empty($element->texts[0]->content))
                            {
                                $box->content = $element->texts[0]->content;
                            }
                            $i++;
                        }
                        $boxes[$element->id] = $box;
                        unset($box);
                    }
                }
                else
                {
                    //Erro
                    dd("Erro: Os componentes desta página não foram devidamente registrados no banco de dados.");
                }
        }
        return view('manage.website.atuacao')->withBanners($banner)
                                                ->withTextIntro($textIntro)
                                                ->withBoxes($boxes)
                                                ->withPage($page);
    }
    
    private function grupo($page){
       foreach ($page->buildPageComponents() as $component) {
                if ($component->id === 33) {
                    foreach ($component->elements as $element) {
                        $banner = new \stdClass();
                        if ($element->images->count() > 0) {
                            $banner->imageSrc = $element->images[0]->src;
                            $banner->imageAlt = $element->images[0]->alt;
                        }
                        $banners[$element->id] = $banner;
                        unset($slide);
                    }
                }
                else if ($component->id === 34) {
                    foreach ($component->elements as $element) {
                        $textIntro = new \stdClass();
                        if ($element->texts->count() > 0) {
                            if(!empty($element->texts[0]->title))
                            {
                                $textIntro->title = $element->texts[0]->title;
                            }
                            if(!empty($element->texts[0]->content))
                            {
                                $textIntro->content = $element->texts[0]->content;
                            }
                            $textIntro->elementId = $element->id;
                        }
                    }
                }
                
                else if ($component->id === 35) {
                    $i = 1;
                    foreach ($component->elements as $element) {
                        $link = new \stdClass();
                        if ($element->links->count() > 0) {
                            $link->id = $i;
                            if(!empty($element->links[0]->text))
                            {
                                $link->text = $element->links[0]->text;
                            }
                            if(!empty($element->links[0]->url))
                            {
                                $link->url = $element->links[0]->url;
                            }
                            if(!empty($element->links[0]->target))
                            {
                                $link->target = $element->links[0]->target;
                            }
                            $i++;
                        }
                        $links[$element->id] = $link;
                        unset($link);
                    }
                }
                else
                {
                    //Erro
                    dd("Erro: Os componentes desta página não foram devidamente registrados no banco de dados.");
                }
        }
        return view('manage.website.grupo')->withBanners($banner)
                                                ->withTextIntro($textIntro)
                                                ->withLinks($links)
                                                ->withPage($page);
    }
    
    private function conheca($page){
        foreach ($page->buildPageComponents() as $component) {
            if ($component->id === 36) {
                foreach ($component->elements as $element) {
                    $banner = new \stdClass();
                    if ($element->images->count() > 0) {
                        $banner->imageSrc = $element->images[0]->src;
                        $banner->imageAlt = $element->images[0]->alt;
                    }
                    $banners[$element->id] = $banner;
                    unset($slide);
                }
            }
            if ($component->id === 37) {
                foreach ($component->elements as $element) {
                    $pageTitle = new \stdClass();
                    if ($element->texts->count() > 0) {
                        if(!empty($element->texts[0]->title))
                        {
                            $pageTitle->title = $element->texts[0]->title;
                        }
                        if(!empty($element->texts[0]->content))
                        {
                            $pageTitle->content = $element->texts[0]->content;
                        }
                        $pageTitle->elementId = $element->id;
                    }
                }
            }
            if ($component->id === 38) {
                 foreach ($component->elements as $element) {
                    $textIntro = new \stdClass();
                    if ($element->texts->count() > 0) {
                        if(!empty($element->texts[0]->title))
                        {
                            $textIntro->title = $element->texts[0]->title;
                        }
                        if(!empty($element->texts[0]->content))
                        {
                            $textIntro->content = $element->texts[0]->content;
                        }
                        $textIntro->elementId = $element->id;
                    }
                }
            }

            if ($component->id === 39) {
                foreach ($component->elements as $element) {
                    $text = new \stdClass();
                    if ($element->texts->count() > 0) {
                        if(!empty($element->texts[0]->title))
                        {
                            $text->title = $element->texts[0]->title;
                        }
                        if(!empty($element->texts[0]->content))
                        {
                            $text->content = $element->texts[0]->content;
                        }
                    }
                    $texts[] = $text;
                    unset($text);
                }
            }

            if ($component->id === 40) {
                 foreach ($component->elements as $element) {
                    $textIntroBox3 = new \stdClass();
                    if ($element->texts->count() > 0) {
                        if(!empty($element->texts[0]->title))
                        {
                            $textIntroBox3->title = $element->texts[0]->title;
                        }
                        if(!empty($element->texts[0]->content))
                        {
                            $textIntroBox3->content = $element->texts[0]->content;
                        }
                    }
                }
            }
            
            if ($component->id === 41) {
                foreach ($component->elements as $element) {
                    if ($element->texts->count() > 0 && $element->images->count() > 0) 
                    {
                        $cert = new \stdClass();
                        if(!empty($element->texts[0]->title))
                        {
                            $cert->title = $element->texts[0]->title;
                        }
                        if(!empty($element->texts[0]->content))
                        {
                            $cert->content = $element->texts[0]->content;
                        }
                        if(!empty($element->images[0]->src))
                        {
                            $cert->imageSrc = $element->images[0]->src;
                        }
                        if(!empty($element->images[0]->alt))
                        {
                            $cert->imageAlt = $element->images[0]->alt;
                        }
                        $certs[$element->id] = $cert;
                        unset($cert);
                    }
                }
            }
        }
        return view('manage.website.conheca')->withBanners($banner)
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
                foreach ($component->elements as $element) {
                    $banner = new \stdClass();
                    if ($element->images->count() > 0) {
                        $banner->imageSrc = $element->images[0]->src;
                        $banner->imageAlt = $element->images[0]->alt;
                    }
                    $banners[$element->id] = $banner;
                    unset($slide);
                }
            }
            if ($component->id === 43) {
                 foreach ($component->elements as $element) {
                    $textIntro = new \stdClass();
                    if ($element->texts->count() > 0) {
                        if(!empty($element->texts[0]->title))
                        {
                            $textIntro->title = $element->texts[0]->title;
                        }
                        if(!empty($element->texts[0]->content))
                        {
                            $textIntro->content = $element->texts[0]->content;
                        }
                        $textIntro->elementId = $element->id;
                    }
                }
            }
            if ($component->id === 44) {
                foreach ($component->elements as $element) {
                    if ($element->texts->count() > 0 && $element->images->count() > 0) 
                    {
                        $box = new \stdClass();
                        if(!empty($element->texts[0]->title))
                        {
                            $box->title = $element->texts[0]->title;
                        }
                        if(!empty($element->texts[0]->content))
                        {
                            $box->content = $element->texts[0]->content;
                        }
                        if(!empty($element->images[0]->src))
                        {
                            $box->imageSrc = $element->images[0]->src;
                        }
                        if(!empty($element->images[0]->alt))
                        {
                            $box->imageAlt = $element->images[0]->alt;
                        }
                        $boxes[$element->id] = $box;
                        unset($box);
                    }
                }
            }
        }
        return view('manage.website.respSocial')->withBanners($banner)
                                         ->withTextIntro($textIntro)
                                         ->withBoxes($boxes)
                                         ->withPage($page);
    }
    
    private function proAcao($page) {
        foreach ($page->buildPageComponents() as $component) {
            if ($component->id === 45) {
                foreach ($component->elements as $element) {
                    $banner = new \stdClass();
                    if ($element->images->count() > 0) {
                        $banner->imageSrc = $element->images[0]->src;
                        $banner->imageAlt = $element->images[0]->alt;
                    }
                    $banners[$element->id] = $banner;
                    unset($slide);
                }
            }
            if ($component->id === 46) {
                 foreach ($component->elements as $element) {
                    $textIntro = new \stdClass();
                    if ($element->texts->count() > 0) {
                        if(!empty($element->texts[0]->title)) {
                            $textIntro->title = $element->texts[0]->title;
                        }
                        if(!empty($element->texts[0]->content)) {
                            $textIntro->content = $element->texts[0]->content;
                        }
                        if(!empty($element->images[0]->src)){
                            $textIntro->imageSrc = $element->images[0]->src;
                        }
                        if(!empty($element->images[0]->alt)){
                            $textIntro->imageAlt = $element->images[0]->alt;
                        }
                        $textIntro->elementId = $element->id;
                    }
                }
            }
            if ($component->id === 47) {
                if ($component->elements[0]->texts->count() > 0) {
                    foreach($component->elements[0]->texts as $text) {
                        $box = new \stdClass();
                        if(!empty($text->title)) {
                            $box->title =$text->title;
                        }
                        if(!empty($text->subtitle)) {
                            $box->subtitle =$text->subtitle;
                        }
                        if(!empty($text->content)) {
                            $box->content =$text->content;
                        }
                        $boxes[$text->id] = $box;
                        unset($box);
                    }
                }
            }
            
            if ($component->id === 48) {
                foreach ($component->elements as $element) {
                    if ($element->images->count() > 0) 
                    {
                        foreach($element->images as $image)
                        {
                            $slide = new \stdClass();
                            if(!empty($image->src))
                            {
                                $slide->imageSrc = $image->src;
                            }
                            if(!empty($imag->alt))
                            {
                                $slide->imageAlt = $imag->alt;
                            }
                            $slides[$image->id] = $slide;
                            unset($slide);
                        }
                    }
                }
            }
        }
        return view('manage.website.proAcao')->withBanners($banner)
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
                foreach ($component->elements as $element) {
                    $banner = new \stdClass();
                    if ($element->images->count() > 0) {
                        $banner->imageSrc = $element->images[0]->src;
                        $banner->imageAlt = $element->images[0]->alt;
                    }
                    $banners[$element->id] = $banner;
                    unset($slide);
                }
            }
            if ($component->id === 50) {
                 foreach ($component->elements as $element) {
                    $textIntro = new \stdClass();
                    if ($element->texts->count() > 0) {
                        if(!empty($element->texts[0]->title)) {
                            $textIntro->title = $element->texts[0]->title;
                        }
                        if(!empty($element->texts[0]->content)) {
                            $textIntro->content = $element->texts[0]->content;
                        }
                        if(!empty($element->images[0]->src)){
                            $textIntro->imageSrc = $element->images[0]->src;
                        }
                        if(!empty($element->images[0]->alt)){
                            $textIntro->imageAlt = $element->images[0]->alt;
                        }
                        $textIntro->elementId = $element->id;
                    }
                }
            }
            
            if ($component->id === 51) {
                foreach ($component->elements as $element) {
                    if ($element->images->count() > 0) 
                    {
                        foreach($element->images as $image)
                        {
                            $box = new \stdClass();
                            if(!empty($image->src))
                            {
                                $box->imageSrc = $image->src;
                            }
                            if(!empty($imag->alt))
                            {
                                $box->imageAlt = $imag->alt;
                            }
                            $boxes[$element->id] = $box;
                            unset($box);
                        }
                    }
                }
            }
        }
             return view('manage.website.proAcaoCampanha')->withBanners($banner)
                                                   ->withTextIntro($textIntro)
                                                   ->withBoxes($boxes)
                                                   ->withPageStatus($pageStatus)
                                                   ->withPage($page);
    }
    
    private function clientes($page){
        foreach ($page->buildPageComponents() as $component) {
            if ($component->id === 52) {
                foreach ($component->elements as $element) {
                    $banner = new \stdClass();
                    if ($element->images->count() > 0) {
                        $banner->imageSrc = $element->images[0]->src;
                        $banner->imageAlt = $element->images[0]->alt;
                    }
                    $banners[$element->id] = $banner;
                    unset($slide);
                }
            }
            if ($component->id === 53) {
                 foreach ($component->elements as $element) {
                    $textIntro = new \stdClass();
                    if ($element->texts->count() > 0) {
                        if(!empty($element->texts[0]->title)) {
                            $textIntro->title = $element->texts[0]->title;
                        }
                        if(!empty($element->texts[0]->content)) {
                            $textIntro->content = $element->texts[0]->content;
                        }
                        if(!empty($element->images[0]->src)){
                            $textIntro->imageSrc = $element->images[0]->src;
                        }
                        if(!empty($element->images[0]->alt)){
                            $textIntro->imageAlt = $element->images[0]->alt;
                        }
                        $textIntro->elementId = $element->id;
                    }
                }
            }
            if ($component->id === 54) {
                foreach ($component->elements as $element) {
                    if ($element->images->count() > 0) 
                    {
                        foreach($element->images as $image)
                        {
                            $logo = new \stdClass();
                            if(!empty($image->src))
                            {
                                $logo->imageSrc = $image->src;
                            }
                            if(!empty($imag->alt))
                            {
                                $logo->imageAlt = $imag->alt;
                            }
                            $logos[$element->id] = $logo;
                            unset($logo);
                        }
                    }
                }
            }
        }
        return view('manage.website.clientes')->withBanners($banner)
                                      ->withTextIntro($textIntro)
                                      ->withLogos($logos)
                                      ->withPage($page);
    }
    
    private function rh($page){
        foreach ($page->buildPageComponents() as $component) {
                if ($component->id === 55) {
                    foreach ($component->elements as $element) {
                        $banner = new \stdClass();
                        if ($element->images->count() > 0) {
                            $banner->imageSrc = $element->images[0]->src;
                            $banner->imageAlt = $element->images[0]->alt;
                        }
                        $banners[$element->id] = $banner;
                        unset($slide);
                    }
                }
                else if ($component->id === 56) {
                    foreach ($component->elements as $element) {
                        $textIntro = new \stdClass();
                        if ($element->texts->count() > 0) {
                            if(!empty($element->texts[0]->title))
                            {
                                $textIntro->title = $element->texts[0]->title;
                            }
                            if(!empty($element->texts[0]->content))
                            {
                                $textIntro->content = $element->texts[0]->content;
                            }
                            $textIntro->elementId = $element->id;
                        }
                    }
                }
                
                else if ($component->id === 57) {
                    $i = 1;
                    foreach ($component->elements as $element) {
                        $box = new \stdClass();
                        if ($element->texts->count() > 0) {
                            $box->id = $i;
                            if(!empty($element->texts[0]->title))
                            {
                                $box->title = $element->texts[0]->title;
                            }
                            if(!empty($element->texts[0]->content))
                            {
                                $box->content = str_replace("images/", imagesURL, $element->texts[0]->content);
                            }
                            $i++;
                        }
                        $boxes[$element->id] = $box;
                        unset($box);
                    }
                }
                else
                {
                    //Erro
                    dd("Erro: Os componentes desta página não foram devidamente registrados no banco de dados.");
                }
        }
        return view('manage.website.rh')->withBanners($banner)
                                 ->withTextIntro($textIntro)
                                 ->withBoxes($boxes)
                                 ->withPage($page);
    }
    
    private function faleConosco($page){
        foreach ($page->buildPageComponents() as $component) {
                if ($component->id === 58) {
                    foreach ($component->elements as $element) {
                        $banner = new \stdClass();
                        if ($element->images->count() > 0) {
                            $banner->imageSrc = $element->images[0]->src;
                            $banner->imageAlt = $element->images[0]->alt;
                        }
                        $banners[$element->id] = $banner;
                        unset($slide);
                    }
                }
                else if ($component->id === 59) {
                    foreach ($component->elements as $element) {
                        $textIntro = new \stdClass();
                        if ($element->texts->count() > 0) {
                            if(!empty($element->texts[0]->title))
                            {
                                $textIntro->title = $element->texts[0]->title;
                            }
                            if(!empty($element->texts[0]->content))
                            {
                                $textIntro->content = $element->texts[0]->content;
                            }
                            $textIntro->elementId = $element->id;
                        }
                    }
                }
                
                else if ($component->id === 60) {
                    if ($component->elements[0]->links->count() > 0) {
                        foreach($component->elements[0]->links as $linker)
                        {
                            $link = new \stdClass();
                            if(!empty($linker->text))
                            {
                                $link->text = $linker->text;
                            }
                                if(!empty($linker->url))
                            {
                                $link->url = $linker->url;
                            }
                            if(!empty($linker->target))
                            {
                                $link->target = $linker->target;
                            }
                            $links[$element->id] = $link;
                            unset($link);
                        }
                    }
                }
                else
                {
                    //Erro
                    dd("Erro: Os componentes desta página não foram devidamente registrados no banco de dados.");
                }
        }
        return view('manage.website.faleConosco')->withBanners($banner)
                                          ->withTextIntro($textIntro)
                                          ->withLinks($links)
                                          ->withPage($page);
    }
    
    private function sac($page){
        foreach ($page->buildPageComponents() as $component) {
                if ($component->id === 61) {
                    foreach ($component->elements as $element) {
                        $banner = new \stdClass();
                        if ($element->images->count() > 0) {
                            $banner->imageSrc = $element->images[0]->src;
                            $banner->imageAlt = $element->images[0]->alt;
                        }
                        $banners[$element->id] = $banner;
                        unset($slide);
                    }
                }
                else if ($component->id === 62) {
                    foreach ($component->elements as $element) {
                        $textIntro = new \stdClass();
                        if ($element->texts->count() > 0) {
                            if(!empty($element->texts[0]->title))
                            {
                                $textIntro->title = $element->texts[0]->title;
                            }
                            if(!empty($element->texts[0]->subtitle))
                            {
                                $textIntro->subtitle = $element->texts[0]->subtitle;
                            }
                            if(!empty($element->texts[0]->content))
                            {
                                $textIntro->content = $element->texts[0]->content;
                            }
                            $textIntro->elementId = $element->id;
                        }
                    }
                }
                else
                {
                    //Erro
                    dd("Erro: Os componentes desta página não foram devidamente registrados no banco de dados.");
                }
        }
        return view('manage.website.sac')->withBanners($banner)
                                  ->withTextIntro($textIntro)
                                  ->withPage($page);
    }
    
    private function trabalheConosco($page){
        foreach ($page->buildPageComponents() as $component) {
                if ($component->id === 63) {
                    foreach ($component->elements as $element) {
                        $banner = new \stdClass();
                        if ($element->images->count() > 0) {
                            $banner->imageSrc = $element->images[0]->src;
                            $banner->imageAlt = $element->images[0]->alt;
                        }
                        $banners[$element->id] = $banner;
                        unset($slide);
                    }
                }
                else if ($component->id === 64) {
                    foreach ($component->elements as $element) {
                        $textIntro = new \stdClass();
                        if ($element->texts->count() > 0) {
                            if(!empty($element->texts[0]->title))
                            {
                                $textIntro->title = $element->texts[0]->title;
                            }
                            if(!empty($element->texts[0]->subtitle))
                            {
                                $textIntro->subtitle = $element->texts[0]->subtitle;
                            }
                            if(!empty($element->texts[0]->content))
                            {
                                $textIntro->content = $element->texts[0]->content;
                            }
                            $textIntro->elementId = $element->id;
                        }
                    }
                }
                else
                {
                    //Erro
                    dd("Erro: Os componentes desta página não foram devidamente registrados no banco de dados.");
                }
        }
        return view('manage.website.trabalheConosco')->withBanners($banner)
                                  ->withTextIntro($textIntro)
                                  ->withPage($page);

    }
    
    private function fornecedores($page){
        foreach ($page->buildPageComponents() as $component) {
                if ($component->id === 65) {
                    foreach ($component->elements as $element) {
                        $banner = new \stdClass();
                        if ($element->images->count() > 0) {
                            $banner->imageSrc = $element->images[0]->src;
                            $banner->imageAlt = $element->images[0]->alt;
                        }
                        $banners[$element->id] = $banner;
                        unset($slide);
                    }
                }
                else if ($component->id === 66) {
                    foreach ($component->elements as $element) {
                        $textIntro = new \stdClass();
                        if ($element->texts->count() > 0) {
                            if(!empty($element->texts[0]->title))
                            {
                                $textIntro->title = $element->texts[0]->title;
                            }
                            if(!empty($element->texts[0]->subtitle))
                            {
                                $textIntro->subtitle = $element->texts[0]->subtitle;
                            }
                            if(!empty($element->texts[0]->content))
                            {
                                $textIntro->content = $element->texts[0]->content;
                            }
                            $textIntro->elementId = $element->id;
                        }
                    }
                }
                else
                {
                    //Erro
                    dd("Erro: Os componentes desta página não foram devidamente registrados no banco de dados.");
                }
        }
        return view('manage.website.fornecedores')->withBanners($banner)
                                  ->withTextIntro($textIntro)
                                  ->withPage($page);

    }
    
    private function contatos($page){
        foreach ($page->buildPageComponents() as $component) {
                if ($component->id === 67) {
                    foreach ($component->elements as $element) {
                        $banner = new \stdClass();
                        if ($element->images->count() > 0) {
                            $banner->imageSrc = $element->images[0]->src;
                            $banner->imageAlt = $element->images[0]->alt;
                        }
                        $banners[$element->id] = $banner;
                        unset($slide);
                    }
                }
                else if ($component->id === 68) {
                    foreach ($component->elements as $element) {
                        $imageIntro = new \stdClass();
                        if ($element->images->count() > 0) {
                            $imageIntro->imageSrc = $element->images[0]->src;
                            $imageIntro->imageAlt = $element->images[0]->alt;
                        }
                    }
                }
                else if ($component->id === 69) {
                    foreach ($component->elements as $element) {
                        $textIntro = new \stdClass();
                        if ($element->texts->count() > 0) {
                            if(!empty($element->texts[0]->title))
                            {
                                $textIntro->title = $element->texts[0]->title;
                            }
                            if(!empty($element->texts[0]->subtitle))
                            {
                                $textIntro->subtitle = $element->texts[0]->subtitle;
                            }
                            if(!empty($element->texts[0]->content))
                            {
                                $textIntro->content = $element->texts[0]->content;
                            }
                            $textIntro->elementId = $element->id;
                        }
                    }
                }
                else if ($component->id === 70) {
                    foreach ($component->elements as $element) {
                        $box = new \stdClass();
                        if ($element->texts->count() > 0) {
                            if(!empty($element->texts[0]->title))
                            {
                                $box->title = $element->texts[0]->title;
                            }
                            if(!empty($element->texts[0]->content))
                            {
                                $box->content = $element->texts[0]->content;
                            }
                        }
                        $boxes[$element->id] = $box;
                        unset($box);
                    }
                }
                else
                {
                    //Erro
                    dd("Erro: Os componentes desta página não foram devidamente registrados no banco de dados.");
                }
        }
        return view('manage.website.contatos')->withBanners($banner)
                                              ->withTextIntro($textIntro)
                                              ->withImageIntro($imageIntro)
                                              ->withBoxes($boxes)
                                              ->withPage($page);
    }
    private function proposta($page){
        foreach ($page->buildPageComponents() as $component) {
                if ($component->id === 71) {
                    foreach ($component->elements as $element) {
                        $banner = new \stdClass();
                        if ($element->images->count() > 0) {
                            $banner->imageSrc = $element->images[0]->src;
                            $banner->imageAlt = $element->images[0]->alt;
                        }
                        $banners[$element->id] = $banner;
                        unset($slide);
                    }
                }
                else if ($component->id === 72) {
                    foreach ($component->elements as $element) {
                        $textIntro = new \stdClass();
                        if ($element->texts->count() > 0) {
                            if(!empty($element->texts[0]->title))
                            {
                                $textIntro->title = $element->texts[0]->title;
                            }
                            if(!empty($element->texts[0]->subtitle))
                            {
                                $textIntro->subtitle = $element->texts[0]->subtitle;
                            }
                            if(!empty($element->texts[0]->content))
                            {
                                $textIntro->content = $element->texts[0]->content;
                            }
                            $textIntro->elementId = $element->id;
                        }
                    }
                }
                else
                {
                    //Erro
                    dd("Erro: Os componentes desta página não foram devidamente registrados no banco de dados.");
                }
        }
        return view('manage.website.proposta')->withBanners($banner)
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
