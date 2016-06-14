<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
   public function index()
   {
        return view('Blog.index');
   }

   public function meioambiente()
   {    
       $arMeioAmbiente = [
    ['post' => ['titulo' =>'EUA usam morcegos para combater naturalmente os Aedes aegypti', 'texto' => 'Não é apenas no Brasil que o mosquito Aedes aegypti tem gerado medo na população. Enquanto as temperaturas começam a subir no hemisfério norte, os estadunidenses também começam a pensar em estratégias para controlar o mosquito e as possíveis epidemias que vêm com ele. Uma das estratégias usadas em Long Island, NY, são os morcegos.

Os morcegos se alimentam de forma diferente de acordo com suas próprias características. Mas, a maior parte das espécies norte-americanas se alimentam de insetos ou de frutas. Os morcegos que comem insetos, são capazes de consumir até mil mosquitos, inclusive os que transmitem doenças como dengue e zika, em apenas uma hora.

A estratégia usada busca incentivar os moradores locais a criarem seus próprios morcegos, para combater a proliferação de mosquitos Aedes aegypti. Criar morcegos é muito simples. Eles vivem em pequenas caixas de madeira, colocadas, principalmente, em locais altos. O resto do serviço a natureza se encarrega de fazer.

“Eles têm uma conotação negativa, comparados aos vampiros. Esse não é o caso. Os morcegos são minúsculos, pequenos animais, capazes de polinizar 500 plantas nativas”, explicou Jonh Darcy, representante do Departamento de Parques em North Hempstead, em declaração à imprensa local. ']],

    ['post' => ['titulo' => '5 ilhas do pacífico já desapareceram devido ao aumento do nível do mar', 'texto' => 'Um estudo publicado recentemente na revista científica Environmental Research conclui que cinco ilhas do Pacífico já desapareceram devido ao aumento do nível dos oceanos. O trabalho científico é uma das únicas provas concretas que confirmam as teses de que o mar está subindo.

Todas as cinco pequenas ilhas que foram sugadas pelo oceano estão na região das Ilhas Salomão, no Oceano Pacífico. De acordo com os pesquisadores, elas tinham de um a cinco hectares e não eram habitadas por humanos.

“Enquanto a perda das áreas costeiras tem sido muito comentada nas últimas décadas, a maioria dos estudos não apresentavam evidências específicas sobre a relação na perda das faixas de areia com o nível do mar”, diz a introdução do estudo, que tem como intuito, justamente, apresentar dados concretos que provem os perigos que o aquecimento global leva às cidades litorâneas.

É provável que muitas outras ilhas estejam sujeitas ao mesmo destino. Já que os estudos mais recentes estimam que o nível do mar pode subir o dobro do que se prevê até 2100, subindo até dois metros e deslocando comunidades em todo o mundo.

Os cientistas responsáveis pelo estudo estão focados em entender o que aconteceu com essas cinco ilhas do pacífico, para encontrar informações que ajudem outras comunidades a se prepararem para o que pode estar por vir.']],
];
 


        return view('Blog.meioambiente', compact('arMeioAmbiente'));
   }

   public function noticias()
   {
        return view('Blog.noticias');
   }

   public function ideias()
   {
        return view('Blog.ideias');
   }
}
