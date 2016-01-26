<?php

namespace App\Helpers;

/**
 * Description of Notification
 *
 * @author Pawel
 */
class Notification {

    public static function generateError($messages) {
        if (is_array($messages)) {
            $messages = array('messages' => $messages);
        } else {
            $messages = array('messages' => array($messages));
        }

        return view('partials.notifications.errr', $messages)->render();
    }

    public static function generateSucces($messages) {
        if (is_array($messages)) {
            $messages = array('messages' => $messages);
        } else {
            $messages = array('messages' => array($messages));
        }

        return view('partials.notifications.succses', $messages)->render();
    }

    public static function generateInfo($messages) {
        if (is_array($messages)) {
            $messages = array('messages' => $messages);
        } else {
            $messages = array('messages' => array($messages));
        }
        return view('partials.notifications.info', $messages)->render();
    }

    public static function generateDanger($messages) {
        if (is_array($messages)) {
            $messages = array('messages' => $messages);
        } else {
            $messages = array('messages' => array($messages));
        }
        return view('partials.notifications.danger', $messages)->render();
    }

}
