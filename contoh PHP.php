PHP
class Hewan {
    public function bersuara () {
        echo "Suara Hewan Tidak Diketahui";
    }
}
class kucing Extends Hewan {
    public function bersuara() {
        echo "Meow!";
    }
}
class Anjing extends Hewan {
    public function bersuara(){
        echo function bersuara(){
            echo "guk!";
        }    
}
$kucing = New Kucing();
$anjing = New Anjing();
$kucing ->bersuara(); //output:meow!
$anjing ->bersuara(); //output:guk!
$hewan =new Hewan(); //objek hewan generik
$hewan ->bersuara (); //output: suara hewan tidak diketahui