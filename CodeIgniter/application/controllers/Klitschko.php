<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Klitschko extends CI_Controller {

    public function  matches() {

        $matches = array(

            array(
                'Opponent' => "Anthony Joshua",
                'Date' => "29 Apr 2017",
                'Location' => " Wembley Stadium, London, England",
                'Results' => "lose"
            ),
            array(
                'Opponent' => "Tyson Fury",
                'Date' => "28 Nov 2015",
                'Location' => "Esprit Arena, Düsseldorf, Germany",
                'Results' => "lose"
            ),
            array(
                'Opponent' => "Bryant Jennings",
                'Date' => "25 Apr 2015",
                'Location' => "Madison Square Garden, New York City, New York, US",
                'Results' => "win"
            ),
            array(
                'Opponent' => "Kubrat Pulev",
                'Date' => "15 Nov 2014",
                'Location' => "O2 World, Hamburg, Germany",
                'Results' => "win"
            ),
            array(
                'Opponent' => "Alex Leapai",
                'Date' => "26 Apr 2014",
                'Location' => "König Pilsener Arena, Oberhausen, Germany",
                'Results' => "win"
            ),
            array(
                'Opponent' => "Alexander Povetkin",
                'Date' => "5 Oct 2013",
                'Location' => "Olympic Stadium, Moscow, Russia",
                'Results' => "win"
            ),
            array(
                'Opponent' => "Francesco Pianeta",
                'Date' => "4 May 2013",
                'Location' => "SAP Arena, Mannheim, Germany",
                'Results' => "win"
            )

        );

        $data['matches'] = $matches;
        $this->load->view('matches', $data);
    }

    public function biography() {

        $biography = array(

            'name' => 'Wladimir Wladimirowitsch Klitschko',
            'birthday' => '25 March 1976',
            'birthplace' => 'Semipalatinsk (now Semey), Kazakh SSR, Soviet Union (now Kazakhstan)',
            'history' => 'Wladimir Wladimirowitsch Klitschko (Ukrainian: Володи́мир Володи́мирович Кличко́, tr. Volodymyr Volodymyrovych Klychko; born 25 March 1976) is a Ukrainian professional boxer. He is a former world heavyweight champion of three major sanctioning bodies, having held the titles of the WBA, IBF, and WBO (twice); additionally he has held the IBO, Ring magazine, and lineal heavyweight titles. A strategic and cerebral boxer, Klitschko is considered to be one of the greatest heavyweight champions of all time, as well as among the hardest punching knockout artists in the history of the division; this strong jab, straight right hand and left hook being his most formidable weapons.'
        );

        $data['biography'] = $biography;
        $this->load->view('biography', $data);

    }
}