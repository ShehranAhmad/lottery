<?php




function uploadAvatar($file, $path){
    $name = time().'-'.str_replace(' ', '-', $file->getClientOriginalName());
    $file->move($path,$name);
    return $path.'/'.$name;
}

function uploadFile($file, $path = 'audios',$count){
    $name = $count.time().'_'.str_replace(' ', '-', $file->getClientOriginalName());
    $file->move($path,$name);
    return $path.'/'.$name;
}

function sendMail($data)
{
    Mail::send($data['view'], ['data' => $data['data']], function ($message) use ($data) {
        $message->to($data['to'], $data['name'])->subject($data['subject']);
    });
}













?>
