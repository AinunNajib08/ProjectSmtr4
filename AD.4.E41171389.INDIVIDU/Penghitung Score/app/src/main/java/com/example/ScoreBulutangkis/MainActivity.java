package com.example.ScoreBulutangkis;

import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {

    int scoreTeamA, scoreTeamB = 0;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        getSupportActionBar().setSubtitle("ScoreBulutankisreal.com");
    }


    public void displayForTeamA(int score) {
        TextView scoreView = (TextView) findViewById(R.id.team_a_score);
        scoreView.setText(String.valueOf(score));
      /*
      Menampilkan score Team A di dalam TextView yang di tampilkan
      Menset nilai score yang bertipe data integer

       */
    }
    public void satuPointA(View v) {
        scoreTeamA = scoreTeamA + 1;
        displayForTeamA(scoreTeamA);

        //Menambah Point Team A 1
    }

    public void displayForTeamB(int score) {
        TextView scoreView = (TextView) findViewById(R.id.team_b_score);
        scoreView.setText(String.valueOf(score));
             /*
      Menampilkan score Team B di dalam TextView yang di tampilkan
      Menset nilai score yang bertipe data integer

       */

    }

    public void satuPointB(View v) {
        scoreTeamB = scoreTeamB + 1;
        displayForTeamB(scoreTeamB);
        // Menambah Point Team B 1
    }


    public void resetPoint(View v) {
        scoreTeamA = 0;
        scoreTeamB = 0;
        displayForTeamA(scoreTeamA);
        displayForTeamB(scoreTeamB);

        //Mereset point Team A ke 0
    }



}
