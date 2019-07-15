using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Khullamann
{
    #region Donation_post
    public class Donation_post
    {
        #region Member Variables
        protected int _post_id;
        protected string _file_path;
        protected string _bio;
        protected string _description;
        protected int _donee_id;
        #endregion
        #region Constructors
        public Donation_post() { }
        public Donation_post(string file_path, string bio, string description, int donee_id)
        {
            this._file_path=file_path;
            this._bio=bio;
            this._description=description;
            this._donee_id=donee_id;
        }
        #endregion
        #region Public Properties
        public virtual int Post_id
        {
            get {return _post_id;}
            set {_post_id=value;}
        }
        public virtual string File_path
        {
            get {return _file_path;}
            set {_file_path=value;}
        }
        public virtual string Bio
        {
            get {return _bio;}
            set {_bio=value;}
        }
        public virtual string Description
        {
            get {return _description;}
            set {_description=value;}
        }
        public virtual int Donee_id
        {
            get {return _donee_id;}
            set {_donee_id=value;}
        }
        #endregion
    }
    #endregion
}