#include <bits/stdc++.h>
#include "data.cpp"
using namespace std;

int main()
{
    //VARIABEL UNTUK DATA TIM

    //Variabel nama tim
    string namaC1;
    string namaC2;
    //Variabel asal tim
    string asalC1;
    string asalC2;
    //Variabel tahun berdirinya tim
    int tahunC1;
    int tahunC2;
    //Variabel nama pemain hanya satu karena hanya menampilkan kapten saja
    string captainC1;
    string captainC2;
    //Variabel asal negara kapten
    string asalCaptC1;
    string asalCaptC2;
    //Variabel nomor punggung kapten
    int nopungC1;
    int nopungC2;

    //Syntax untuk inputan data tim pertama
    cin>>namaC1;
    cin>>asalC1;
    cin>>tahunC1;
    cin>>captainC1;
    cin>>asalCaptC1;
    cin>>nopungC1;


    DaftarClub Tim1(namaC1, asalC1, tahunC1, captainC1, asalCaptC1, nopungC1);

    cout<<endl<<"DATA TIM PERTAMA"<<endl<<endl;
    cout<<"Nama Klub        : "<<Tim1.getnamaClub()<<endl;
    cout<<"Asal Klub        : "<<Tim1.getnegaraAsal()<<endl;
    cout<<"Tahun berdiri    : "<<Tim1.gettahunBerdiri()<<endl;
    cout<<"Nama Kapten      : "<<Tim1.getnamaPemain()<<endl;
    cout<<"Asal Negara      : "<<Tim1.getasalPemain()<<endl;
    cout<<"Nomor Punggung   : "<<Tim1.getnopung()<<endl<<endl;

    //Syntax untuk inputan data tim pertama
    cin>>namaC2;
    cin>>asalC2;
    cin>>tahunC2;
    cin>>captainC2;
    cin>>asalCaptC2;
    cin>>nopungC2;


    DaftarClub Tim2(namaC2, asalC2, tahunC2, captainC2, asalCaptC2, nopungC2);

    cout<<endl<<"DATA TIM KEDUA"<<endl<<endl;
    cout<<"Nama Klub        : "<<Tim2.getnamaClub()<<endl;
    cout<<"Asal Klub        : "<<Tim2.getnegaraAsal()<<endl;
    cout<<"Tahun berdiri    : "<<Tim2.gettahunBerdiri()<<endl;
    cout<<"Nama Kapten      : "<<Tim2.getnamaPemain()<<endl;
    cout<<"Asal Negara      : "<<Tim2.getasalPemain()<<endl;
    cout<<"Nomor Punggung   : "<<Tim2.getnopung()<<endl;

    cout<<endl<<"        BIG MATCH MALAH HARI INI"<<endl;
    cout<<"            "<<Tim1.getnamaClub()<<" VS "<<Tim2.getnamaClub()<<endl;

    return 0;
}