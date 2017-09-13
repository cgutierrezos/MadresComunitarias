<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GmapsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //configuaración
        $config = array();
        $config['center'] = 'auto';
        
        $config['zoom'] = 17;


        $config['onboundschanged'] = 'if (!centreGot) {
            var mapCentre = map.getCenter();
            marker_0.setOptions({
                position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng())
 
            });
        }
        centreGot = true;';
 
        \Gmaps::initialize($config);
 
        // Colocar el marcador 
        // Una vez se conozca la posición del usuario
        $marker = array();
        
        $marker['title'] = 'Click to zoom';
        $marker['position'] = 'auto';
        $content = '<div id="content">'.
            '<div id="siteNotice">'.
            '</div>'.
            '<h1 id="firstHeading" class="firstHeading">HOGAR COMUNITARIO MIS PEQUEÑOS GENIOS</h1>'.
            '<div id="bodyContent">'.
            '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' .
            'sandstone rock formation in the southern part of the '.
            'Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) '.
            'south west of the nearest large town, Alice Springs; 450&#160;km '.
            '(280&#160;mi) by road. Kata Tjuta and Uluru are the two major '.
            'features of the Uluru - Kata Tjuta National Park. Uluru is '.
            'sacred to the Pitjantjatjara and Yankunytjatjara, the '.
            'Aboriginal people of the area. It has many springs, waterholes, '.
            'rock caves and ancient paintings. Uluru is listed as a World '.
            'Heritage Site.</p>'.
            '<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'.
            'https://en.wikipedia.org/w/index.php?title=Uluru</a> '.
            '(last visited June 22, 2009).</p>'.
            '</div>'.
            '</div>';
        $marker['infowindow_content'] = $content;
        //$marker['ondblclick'] = 'location.href = "/gmaps?show=hogar"';
        \Gmaps::add_marker($marker);
 
        $map = \Gmaps::create_map();
 
        //Devolver vista con datos del mapa
        return view('map.map', compact('map'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
