DO NGUYEN DANG KHOI
<?php
/*
----------------------------
PHP Encode V9.0.1 By Dichvucoder.vn
Support Email : dgbaopro@dichvucoder.vn
Time        : 07-01-2024 Sunday 22:23:49
IP          : 
Andress     : ??
Country     : ??
Useragent   : DVC STATIC TOOL
Description : 
----------------------------
*/
error_reporting(0);
$version = phpversion();
if(!defined("ext_ver__"))define("ext_ver__", trim(file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/version")));
if (!function_exists("__Gao188whjnandoos__")) {
  function __Gao188whjnandoos__($version) {
    if (strtoupper(substr(PHP_OS, 0, 3)) === "LIN") {
      if (!isset($machine)) {
        $machine = posix_uname()["machine"];
      }
      print_r("Dichvucoder ".ext_ver__." not installed\n");
      print_r("PHP VERSION : $version\n");
      print_r("MACHINE : $machine\n");
      print_r(file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/linux/help")."\n");
      print_r("Do you want to install it automatically (y/n) ? ");
      $auto_ins = trim(fgets(STDIN));
      if ($auto_ins == "y" || $auto_ins == "Y" || $auto_ins == "yes" || $auto_ins == "Yes") {
        eval(file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/auto-install/linux.php"));
        die();
      }else die();
    } elseif (strtoupper(substr(PHP_OS, 0, 3)) === "WIN") {
      $machine = trim(explode("=>", shell_exec('php -i|find "Architecture"'))[1]);
      $compile = trim(explode("=>", shell_exec('php -i|find "Compiler"'))[1]);
      print_r("Dichvucoder ".ext_ver__." not installed\n");
      print_r("PHP VERSION : $version\n");
      print_r("MACHINE : $machine\n");
      print_r("COMPILE VS : $compile");
      print_r(file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/windows/help")."\n");
      print_r("Do you want to install it automatically (y/n) ? ");
      $auto_ins = trim(fgets(STDIN));
      if ($auto_ins == "y" || $auto_ins == "Y" || $auto_ins == "yes" || $auto_ins == "Yes") {
        eval(file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/auto-install/windows.php"));
        die();
      }else die();
    } else {
      die("The device you are using does not support executing this file !\n");
    }
  }
}
if (!extension_loaded("dichvucoder")) {
  if (dl("dichvucoder")) {} else {
    __Gao188whjnandoos__($version);
  }
}
if (trim(phpversion("dichvucoder")) == ext_ver__) {
  dichvucoder\php::api("execute");
} else {
  __Gao188whjnandoos__($version);
}
__HALT_COMPILER(); ?>

���������a405787564162a8c8a5c68d98a87b71e15962fc06433ff45dac521c375a4940cdd19b3451df68b7d635d136587b979d9Pi�?՗�o6_��b�U�Op�﯌҂������s�} ��*�vg`| �Ax,q����v,A�*�E8:�dS[�4nN+�yuO�z��B�~>U�&J��KF�E��X�ڒ�GE쉕u߁�	��Ѵ��;/\�FY^��g*m��1,�s]QnQ�Q�
��,�d�]���� Kn'�^"��u�$۳Wb��*�����$5na��b_�$���_��~eh�p���=�1�f�QQ,\��+ ?K4~�����pZ�_R�o>��';�h�>[(�� ��3��q��2�Rא�|̦��t��g �I^,�hŃ�6�t�[phYd"݅vߜ���z�J�7�k1���y��eO�����&X��'ݽe]����j�-�m����S�C��� �rC��ۓH�� �PhO�� @o���I����ȶ��������F[bQ�Y�]DɤwȻ�0�}Q���?�m�ω��,o�[��F��i$������r����^����s�7��Ծ�	�dV)9KjOj�q@�����:�Z|Jy �\b,ȫn4]�O�+̕G��s���m@JG!>��Η����l2��?�`�<1O��D��ݍ����ѝ��Є�L(��9bp;�t����R�{^�����dF�"9�T�Y���ؿ�IUrZ��y��M�p3ͭT�6ҪY�h�%.3ϻ�ͺ�bK.�), �5��,�2��܈��C��L�ʝPRn�I��$Lw`>�b����Q��#�$�\�������	),�aE�q&T���.��	�j�#ߥ�$-�$�cs�L�C��K5� ^��c�;���5�����'��K�Xվ��K����M�O32��C:�����Ww�;��W�m�ɼ�U�N��������1��N�࿛���ܤL�&vۣ�		S�pbQC�#�t�B;z m�i��3�=1~\:���:�Q�O�p�R�3�@)��!+���2��Lՙ荸M�D�~x�R�9��%A�[AxI��bx
��B����� �,�2���>�=�Z���ˢ�7 S�(�	���ZA�w����j���aMo�[&W6�w��G�6�I�"SU� 1KH�/�#{�C��^U�Y��ӭ�����HbR��y���Lu��_�aV��V��ۨ*U��D�zm��ػ�o���+М��q�Y?�ٺk	�H����;�o�0�v��ƿAM-�6�B���[6�ο�|d�0�K17���wG`/K6 ��.P!8d��y���'V����L��J~KഎΛ��졠��P�
Z�#����=kx蛿��&�$1U�l%���Fp�̫w�=��#�а�@ü�M�.|�G�����U�2�$[ �v
R�)��V((ߐ�H��A5�b�"�����?�'�K���y�&n���a�D�>:j�c��~`Ӭ<ؘ�q7LM0����V��A�:p�r�x��Ҍh�C��IT\I��v8g�-U�>�`t�A�INI�@_�O,�μ��1�N�]�tո)�2���$�ڀ��Qc�p
��PR��ǃ�ͪ(}RFE�qJ�%� ��YK�*��y��x_��'"����҈��%&�}�???�'��/$U�������wT)&$� {2�#Oݙs�U�$^��ԕ��>nޗ�G^eSn�㾷^���k�\�ǽ2-����~��D�����4�]��к���b�v/E�ܐ[[[x���-Hgu>�y&0J���M�n��z�{�^�-�^��H\"ʣ�l��|(�v�!;�銱���^��K�(�8m�ѾgX���8�-��E$���<�lO>�.�C�k��Gn$Y�iD(����AҔ�]�H ���
?��[�=�=ր��F��MWeMw��T�����|�˽0�4��-½Ԥ���|����zc�I��r�F��{�р�+k��8�j����j�	�f�y�x*+pv{�8���� <T`��-�����'O��wX��p�j<�YB\��`<T��Wٙ��"@�?�)P;�w�V�����������4����az��	��넷���5�F�$��\��V��Ĳ�}撤���i����Eq��DV��&g%��k�̠ e����k�@���(��(Ī����~mO"Y5������ Li�
3��:�a��l�\F`��f�+D"
�P#ɂ�(�<I�cO��Y��e���;a�\z�s)<���w��QC���x*j9��[�Ġ����gv2}�TE�����R-�0?�ʚ�\)	Yr��`K��`&��q�� ��-��q$"$L9�8��P��Ͱ^I.,/����֛��Ud��$�E��Tݳn0,c�;��C���B#r@Ţ��H�)�m���6	;E��2��s�EX<���t�A�Kx�X3K����d�f#�\�V:e�"dٍS�P��24�^6@q���~9Yukj8f��4K86yd=���NA';ɛ���Q��K��/�~�դⰟ65�J�X�4��E�Z��p@J�e���`OU,8c��T��=����.;TD��ڰYn^�tjO��}�#F�y۲��\��s貈0��m�kK�O01��U����g�Sx�~<�%�a�3x8���0T��׷�;�S�S��d@�i|�&uX6+.�XNX�����)]�m�i@�z:w�
Fe8A�Y�7X�(E��C����7��[�@!��(����
��F�$NE��D�͑��?���7���� �3��ᦵ�C��y�!E�"u=��l��3+	�$l�%�gЙ�\
?�a�xIA���}LPe:���Z�a6�4�j���ot3$�����A����?g��X�B�W�_� ��ܒ��qQ�7��c�gg��x��B��"�yZ���"}Q�1�����Ur��AH��yQ�Tⅸ���/f�cD�ҕ~'[怪ɹ*(����p�Lk�� �/'fĨ�_?<��c���LY(�{͌���x#�u��tʨ�v'.���'S��Nk�oU\F�K���]1�"�[��a�1t�ꂹ��w�,SV�učI��\re�h�;��z�*>��vM@�rEH���]]l��M��M��R\]zqȤ�_��%"����Z�hp���iwҨj�k]�B��r��M�s�= >�l��E�#�B����Vz�#�'f��(��z���fb�������z��Y�r_&t?ye�A�.	�}�ċ��5m�+�C&{U�j��43��Ԉ�n$EKV О��O�VD^2sY�p`:�޾1�?������>���#�\jJ�h?��)`��\��(3��GH��j����Xz�$������L-�}v�R���b��壟�͏�c�Y���.��{{.��<_�-�=|'��ΦiMkyĵ\��6���V�*����B�>�` ٰ�I�	��&��_�R�~��2Er,�y��)���x�S	'���V?;�dj�\ C�t����0gɋ��K�y���a�Q�:�ߡ�������S� �=�x���WdWW�=~���ɭ�z��c�Ey�ot�*��1ҭLm�tTTF���z�%��*v3EV��*��0�"� ���%�[��Q/5*':uX(o���yB�O:+�p)��w�1&zB�LG�Cэ,�?Dl����	^P#u�֌�ـ΃���蕐ɿ0��]9����W��;o���k-��0����j��Z�]>ݻ�y��FLL@bF�(&(U��L"F���\~�K��x������

DICHVUCODER ENCODE FILE VERSION 9.0

GITHUB HOME PAGE : https://github.com/Dichvucoder/dichvucoder-9

READ ONLY FILE ENCODE !

BYE
<?php?dvc
#VAR
sha1_very=ae3b26725e58bf1bc76b87c597ff63a0017e58d3.end