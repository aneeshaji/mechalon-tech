<?php

namespace App\Helpers;

use Request;
use File;

use App\Models\Admin;

class ReturnPathHelper
{

    public static function getAdminImage($admin_id)
    {
        $admin = Admin::find($admin_id);


        if (!empty($admin)) {
            if (empty($admin->avatar)) {
                $image_url = 'assets/images/admins/default.png';

                // Find Gravator image from Gravaton
                if (GravatarHelper::validate_gravatar($admin->email)) {
                    return GravatarHelper::gravatar_image($admin->email, 200, "identicon");
                }
            } else {
                if (File::exists('assets/images/admins/' . $admin->avatar)) {
                    $image_url = 'assets/images/admins/' . $admin->avatar;
                } else {
                    // Find Gravator image from Gravaton
                    if (GravatarHelper::validate_gravatar($admin->email)) {
                      return GravatarHelper::gravatar_image($admin->email, 200, "identicon");
                    }
                    $image_url = 'assets/images/admins/default.png';
                }
            }
        } else {
            $image_url = 'assets/images/admins/default.png';
        }

        return asset($image_url);
    }

    /**
     * getUserImage
     * @param  [type] $user_id [description]
     * @return [type]          [description]
     */
    public static function getUserImage($user_id)
    {
        $user = Admin::find($user_id);

        if ($user->profile_picture == NULL || $user->profile_picture == "") {
            $image_url = 'images/users/user.png';
            //Find Gravator image from Gravaton
            if (GravatarHelper::validate_gravatar($user->email)) {
                return GravatarHelper::gravatar_image($user->email, 200, "identicon");
            }
        } else {
            if (File::exists('images/users/' . $user->profile_picture)) {
                $image_url = 'images/users/' . $user->profile_picture;
            } else {
                //Find Gravator image from Gravaton
                if (GravatarHelper::validate_gravatar($user->email)) {
                    return GravatarHelper::gravatar_image($user->email, 200, "identicon");
                }
                $image_url = 'images/users/user.png';
            }
        }
        return url($image_url);
    }
}
